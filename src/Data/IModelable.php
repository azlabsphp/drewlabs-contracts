<?php

namespace Drewlabs\Contracts\Data;

/**
 * @deprecated Will be remove in next major release
 */
interface IModelable extends ModelInterface
{
    /**
     * Get or select an item from the data store based on some conditions
     *
     * @param mixed $conditions
     * @param bool $relations
     * @return mixed
     */
    public function findWith(array $conditions, bool $relations = false);

    /**
     * Update an item in the data store
     *
     * @param mixed $conditions
     * @param array $update_values
     *
     * @return int
     */
    public function updateWith($conditions, array $update_values);

    /**
     * Remove an item from the data store
     *
     * @param array $conditions
     *
     * @return int
     */
    public function deleteWith(array $conditions = null);
}
