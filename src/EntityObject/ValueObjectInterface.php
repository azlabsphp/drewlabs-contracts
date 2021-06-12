<?php

namespace Drewlabs\Contracts\EntityObject;

use JsonSerializable;

interface ValueObjectInterface extends JsonSerializable, \ArrayAccess
{
    /**
     * Provides an implementation that set the object attributes from an array
     * 
     * @param array $attributes
     * @param boolean $set_guarded
     * @return static
     */
    public function setAttributes(array $attributes, $set_guarded = false);

    /**
     * Get list of properties with their corresponding values
     *
     * @return array
     */
    public function attributesToArray();

    /**
     * Convert the object to an array
     *
     * @return array
     */
    public function toArray();

    /**
     * Create an instance of @see {{ValueObjectInterface}} from a standard PHP Class
     *
     * @param \stdClass $value
     * @return static
     */
    public function fromStdClass($value);

    /**
     * Creates a copy of the @see {{ValueObjectInterface}} class modifying the properties with the user
     * provided attribute array
     *
     * @param array $attr
     * @param boolean $set_guarded
     * @return static
     */
    public function copyWith(array $attr, $set_guarded = false);
}