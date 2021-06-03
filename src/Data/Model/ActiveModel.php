<?php

namespace Drewlabs\Contracts\Data\Model;

interface ActiveModel extends Model
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
}