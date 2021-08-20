<?php

declare(strict_types=1);

/*
 * This file is part of the Drewlabs package.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Contracts\EntityObject;

/**
 * @deprecated v1.0 Implementation has been migrated to ValueObject class of the core packages
 *  Will be remove in next major release (2.0)
 * */
abstract class AbstractEntityObject implements ValueObjectInterface
{
    /**
     * Attribute container.
     *
     * @var array|\ArrayAccess
     */
    protected $___attributes = [];

    /**
     * Defines the properties that can not been set using the attr array.
     *
     * @var array
     */
    protected $___guarded = [];

    /**
     * List of properties to hide when jsonSerializing the current object.
     *
     * @var array
     */
    protected $___hidden = [];

    /**
     * Indicated whether the bindings should load guarded properties.
     *
     * @var bool
     */
    protected $___loadGuardedAttributes = false;

    public function __construct($attributes = [])
    {
        if (null !== $attributes) {
            $this->setAttributes($attributes);
        }
    }

    public function __get($name)
    {
        [$is_assoc, $values] = $this->loadJsonMappings();
        if ($is_assoc) {
            $values = array_keys($values);
        }
        if (\in_array($name, $values, true)) {
            return isset($this->___attributes[$name]) ? $this->callAttributeSerializer($name) : null;
        }

        return null;
    }

    public function __set($name, $value)
    {
        [$is_assoc, $values] = $this->loadJsonMappings();
        if ($is_assoc) {
            $values = array_keys($values);
        }
        if (\in_array($name, $values, true)) {
            $this->___attributes[$name] = $this->callAttributeDeserializer($name, $value);

            return;
        }
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function __toString()
    {
        return implode(', ', $this->___attributes);
    }

    //endregion ArrayAccess method definitions

    //region magic methods
    public function __isset($name)
    {
        return \array_key_exists($name, $this->___attributes) && (null !== $this->___attributes[$name]);
    }

    public function __unset($name)
    {
        return $this->offsetUnset($name);
    }

    /**
     * {@inheritDoc}
     */
    public function copyWith(array $attr, $set_guarded = false)
    {
        $attributes = array_merge($this->getRawAttributes(), $attr);

        return (new static())->setAttributes($attributes, $set_guarded);
    }

    /**
     * {@inheritDoc}
     */
    public function fromStdClass($value)
    {
        foreach ($value as $key => $value) {
            // code...
            $this->__set($key, $value);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {
        $attributes = [];
        [$is_assoc, $values] = $this->loadJsonMappings();
        if ($is_assoc) {
            foreach ($values as $key => $value) {
                if (!\in_array($key, $this->___hidden, true)) {
                    $attributes[$value] = $this->{$key};
                }
            }
        } else {
            foreach ($values as $key) {
                if (!\in_array($key, $this->___hidden, true)) {
                    $attributes[$key] = $this->{$key};
                }
            }
        }

        return $attributes;
    }

    /**
     * {@inheritDoc}
     */
    public function attributesToArray()
    {
        return array_filter($this->___attributes, function ($key) {
            return !\in_array($key, $this->___hidden, true);
        }, \ARRAY_FILTER_USE_KEY);
    }

    /**
     * Convert the object to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->attributesToArray();
    }

    /**
     * [[loadGuardedAttributes]] property getter.
     *
     * @return bool
     */
    public function getLoadGuardedAttributes()
    {
        return $this->___loadGuardedAttributes;
    }

    //region Array access method definitions

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {
        if (\is_int($offset)) {
            return false;
        }

        return \array_key_exists($offset, $this->___attributes);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {
        if (\is_int($offset)) {
            return;
        }

        return $this->__get($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {
        if (\is_int($offset)) {
            return;
        }
        $this->__set($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {
        $this->__set($offset, null);
    }

    /**
     * {@inheritDoc}
     */
    final protected function setAttributes(array $attributes, $set_guarded = false)
    {
        $this->___loadGuardedAttributes = $set_guarded;
        [$is_assoc, $values] = $this->loadJsonMappings();
        if ($is_assoc) {
            foreach ($values as $key => $value) {
                if (\array_key_exists($value, $attributes) && $this->isNotGuarded($value, $set_guarded)) {
                    $this->{$key} = $attributes[$value];
                }
            }
        } else {
            foreach ($values as $key) {
                if (\array_key_exists($key, $attributes) && $this->isNotGuarded($key, $set_guarded)) {
                    $this->{$key} = $attributes[$key];
                }
            }
        }

        return $this;
    }

    /**
     * Get a boolean value indicating wheter json attribute definition is an
     * associative array or not along the list of property mappings.
     *
     * @return array
     */
    protected function loadJsonMappings()
    {
        $json_attributes = $this->getJsonableAttributes();
        $is_assoc = array_keys($json_attributes) !== range(0, \count($json_attributes) - 1);

        return [$is_assoc, $json_attributes];
    }

    protected function callAttributeDeserializer($name, $value)
    {
        if (method_exists($this, 'deserialize'.ucfirst($name).'Attribute')) {
            return $this->{'deserialize'.ucfirst($name).'Attribute'}($value);
        }

        return $value;
    }

    protected function callAttributeSerializer($name)
    {
        if (method_exists($this, 'serialize'.ucfirst($name).'Attribute')) {
            return $this->{'serialize'.ucfirst($name).'Attribute'}();
        }

        return $this->___attributes[$name];
    }

    protected function isNotGuarded($value, bool $load = false)
    {
        return $load ? true : !\in_array($value, $this->___guarded, true);
    }

    final protected function getRawAttributes()
    {
        return $this->___attributes;
    }

    //endregion magic methods

    /**
     * return this list of dynamic attributes that can be set on the ihnerited class.
     *
     * @return array
     */
    abstract protected function getJsonableAttributes();
}
