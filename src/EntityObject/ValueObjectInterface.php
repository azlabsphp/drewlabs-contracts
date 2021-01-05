<?php

namespace Drewlabs\Contracts\EntityObject;

use JsonSerializable;

interface ValueObjectInterface extends JsonSerializable
{
    /**
     * Get list of properties with their corresponding values
     *
     * @return array
     */
    public function attributesToArray();

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
     * @param boolean $loadGuarded
     * @return void
     */
    public function copyWith(array $attr, $loadGuarded = false);
}