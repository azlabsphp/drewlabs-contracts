<?php

namespace Drewlabs\Contracts\Data\Model;

interface Model
{
    /**
     * Returns the primaryKey of the given model
     *
     * @return string
     */
    public function getPrimaryKey();

    /**
     * Returns the value of the primary of the model
     *
     * @return string
     */
    public function getKey();

    /**
     * Returns the collection associated with the given model
     *
     * @return string
     */
    public function getTable();

    /**
     * Convert list of model attributes | properties into array
     *
     * @return array
     */
    public function attributesToArray();

    /**
     * As the {attributesToArray} method, it returns the model public properties to an associative array
     *
     * @return array
     */
    public function getAttributes();

    /**
     * Convert a model and it relationships into an array
     *
     * @return array
     */
    public function toArray();

}