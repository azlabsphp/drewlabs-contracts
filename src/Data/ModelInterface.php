<?php

namespace Drewlabs\Contracts\Data;

interface ModelInterface
{
    /**
     * Insert new item to the data store
     *
     * @param array $item
     *
     * @return mixed
     */
    public function add(array $items);

    /**
     * Fetch all data from the data storage with their related relationship
     *
     * @param bool $relations
     * @param array $columns
     * @return mixed
     */
    public function getAll(bool $relations = false, array $columns = array('*'));

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
    public function getEntity();

    /**
     * Returns the collection unique identifying name
     *
     * @return string
     */
    public function getEntityUniqueName();

    /**
     * Convert list of model attributes | properties into array
     *
     * @return array
     */
    public function attributesToArray();

    /**
     * Convert a model and it relationships into an array
     *
     * @return array
     */
    public function toArray();
}
