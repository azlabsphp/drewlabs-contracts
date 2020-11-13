<?php

namespace Drewlabs\Contracts\EntityObject;

use JsonSerializable;

abstract class AbstractEntityObject implements JsonSerializable
{

    /**
     * Attribute container
     *
     * @var array|\ArrayAccess
     */
    protected $___attributes =  [];

    /**
     * Defines the properties that should be guarded when serializing the
     * object to associative array
     *
     * @var array
     */
    protected $___guarded = [];

    /**
     * Indicated whether the bindings should load guarded properties
     *
     * @var boolean
     */
    protected $___loadGuardedAttributes = false;

    public function __construct($attributes = [])
    {
        $this->copyWith($attributes);
    }


    public function copyWith(array $attr, $loadGuarded = false)
    {
        $this->___loadGuardedAttributes = $loadGuarded;
        list($is_assoc, $values) = $this->loadJsonMappings();
        if ($is_assoc) {
            foreach ($values as $key => $value) {
                # code...
                if (array_key_exists($value, $attr) && $this->isNotGuarded($value, $loadGuarded)) {
                    $this->{$key} = $attr[$value];
                }
            }
        } else {
            foreach ($values as $key) {
                # code...
                if (array_key_exists($key, $attr) && $this->isNotGuarded($key, $loadGuarded)) {
                    $this->{$key} = $attr[$key];
                }
            }
        }
        return $this;
    }

    public function __get($name)
    {
        list($is_assoc, $values) = $this->loadJsonMappings();
        if ($is_assoc) {
            $values = array_keys($values);
        }
        if (in_array($name, $values)) {
            return isset($this->___attributes[$name]) ? $this->callAttributeSerializer($name) : null;
        }
        return null;
    }

    public function __set($name, $value)
    {
        list($is_assoc, $values) = $this->loadJsonMappings();
        if ($is_assoc) {
            $values = array_keys($values);
        }
        if (in_array($name, $values, true)) {
            $this->___attributes[$name] = $this->callAttributeDeserializer($name, $value);
            return;
        }
    }

    public function fromStdClass($value)
    {
        foreach ($value as $key => $value) {
            # code...
            $this->__set($key, $value);
        }
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        $attributes = array();
        list($is_assoc, $values) = $this->loadJsonMappings();
        if ($is_assoc) {
            foreach ($values as $key => $value) {
                $attributes[$value] = $this->{$key};
            }
        } else {
            foreach ($values as $key) {
                $attributes[$key] = $this->{$key};
            }
        }
        return $attributes;
    }

    /**
     * Get list of properties with their corresponding values
     *
     * @return array
     */
    public function attributesToArray()
    {
        return $this->___attributes;
    }

    /**
     * @inheritDoc
     *
     * @return string
     */
    public function __toString()
    {
        return implode(', ', $this->___attributes);
    }

    /**
     * [[loadGuardedAttributes]] property getter
     *
     * @return bool
     */
    public function getLoadGuardedAttributes()
    {
        return $this->___loadGuardedAttributes;
    }

    /**
     * Get a boolean value indicating wheter json attribute definition is an
     * associative array or not along the list of property mappings
     *
     * @return array
     */
    protected function loadJsonMappings()
    {
        return [\is_assoc($this->getJsonableAttributes()), $this->getJsonableAttributes()];
    }

    /**
     * return this list of dynamic attributes that can be set on the ihnerited class
     *
     * @return array
     */
    abstract protected function getJsonableAttributes();

    protected function callAttributeDeserializer($name, $value)
    {
        if (method_exists($this, 'deserialize' . ucfirst($name) . 'Attribute')) {
            return $this->{'deserialize' . ucfirst($name) . 'Attribute'}($value);
        }
        return $value;
    }

    protected function callAttributeSerializer($name)
    {
        if (method_exists($this, 'serialize' . ucfirst($name) . 'Attribute')) {
            return $this->{'serialize' . ucfirst($name) . 'Attribute'}();
        }
        return $this->___attributes[$name];
    }

    protected function isNotGuarded($value, bool $load = false)
    {
        return $load ? true : !in_array($value, $this->___guarded);
    }
}
