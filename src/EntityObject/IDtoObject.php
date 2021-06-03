<?php

namespace Drewlabs\Contracts\EntityObject;

use Drewlabs\Contracts\Data\Model\Model;

interface IDtoObject extends \JsonSerializable
{
    /**
     * Create an instance of the current class from PHP standard object or array
     *
     * @param \stdClass|array $value
     * @return static
     */
    public function fromStdClass($value);

    /**
     * Convert the current form dto object into a form model
     *
     * @return Model|mixed
     */
    public function toModel();

    /**
     * Build the required properties of the current object from params
     *
     * @param array $attributes
     * @param boolean $loadAll
     * @return static
     */
    public function copyWith(array $attributes, $loadAll = false);
}
