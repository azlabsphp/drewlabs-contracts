<?php

namespace Drewlabs\Contracts\Support\DataTransfertObject;

use Drewlabs\Contracts\Support\ArrayableInterface;

interface ListBridgeInterface
{
    /**
     * Build a list of ArrayableInterface from a list of object
     *
     * @param object[]|\stdClass[]|ObjectInterface[] $name
     * 
     * @return ArrayableInterface[]
     */
    public function objectToModelList(array $obj);

    /**
     * Build a list of ObjectInterface from a list of ArrayableInterface params.
     *
     * @param ArrayableInterface[]||\stdClass[]|array[] $values
     * @param bool                         $all
     *
     * @return ObjectInterface[]
     */
    public function toObjectList(array $values, $all = false);
}