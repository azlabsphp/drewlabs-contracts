<?php

namespace Drewlabs\Contracts\Data\DML;

use Drewlabs\Contracts\Data\Model\Model;

interface DMLProvider
{
    /**
     * Insert a new row to the database
     * 
     * @method \Drewlabs\Contracts\Data\Model\Model|mixed create(array $attributes, $params = [])
     * @method \Drewlabs\Contracts\Data\Model\Model|mixed create(\Drewlabs\Contracts\Data\Model\Model $model, $params = [])
     *
     * @param array ...$args
     */
    public function create(...$args);

    /**
     * Insert many row into the database
     *
     * @param array $attributes
     * @return bool
     */
    public function createMany(array $attributes);

    /**
     * Perform a DELETE operation on the models matching the provided query parameters
     * 
     * @method int|mixed delete(array $query, bool $hot_operation = false)
     * @method boolean delete(int $id)
     * @method boolean delete(\Drewlabs\Contracts\Data\Model\Model $model)
     *
     * @param array $query
     * @param bool $hot_operation
     */
    public function delete(...$args);

    /**
     * Retrieve all row/models matching a given query criteria from the database
     * 
     * $dto_transform_fn if passed in with try to apply data transformation to the return result.
     * 
     * Note: $dto_transform_fn must be a \Closure or PHP Callable that takes {DataProviderQueryResultInterface} as parameter
     * 
     * <code>
     * <?php
     *      $dml->select($query, $columns, false, function(\Drewlabs\Contracts\Data\DataProviderQueryResultInterface $result ) {
     *          // Code to perform transformation
     *          return $transformed_values;
     *      })
     * ?>
     * </code>
     * 
     * <code>
     * <?php
     *      $dml->select($id, $columns, false, function(\Drewlabs\Contracts\Data\Model\Model $model ) {
     *          // Code to perform transformation
     *          return $transformed_model;
     *      })
     * ?>
     * </code>
     * 
     * @method \Drewlabs\Contracts\Data\DataProviderQueryResultInterface|mixed select(array $query = [], array $columns = ['*'], bool $load_relations = false, \Closure $dto_transform_fn = null)
     * @method \Drewlabs\Contracts\Data\Model\Model|mixed  select(int $id, array $columns = ['*'], bool $load_relations = true, \Closure $dto_transform_fn = null)
     * @method \Drewlabs\Contracts\Data\Model\Model|mixed  select(string $id, array $columns = ['*'], bool $load_relations = true, \Closure $dto_transform_fn = null)
     *
     * @param array ...$args
     */
    public function select(...$args);

    /**
     * Update a row/model from the database
     * 
     * Returns the update model with it properties or the transformed value returned the $dto_transform_fn callback
     * 
     * @method \Drewlabs\Contracts\Data\Model\Model|mixed update(Model $model, array $attributes = [], array $params = [], \Closure $dto_transform_fn = null)
     * @method int|mixed update(array $query, array $attributes = [], array $params = [])
     * @method \Drewlabs\Contracts\Data\Model\Model|mixed update(int $id, array $attributes = [], array $params = [], \Closure $dto_transform_fn = null)
     * @method \Drewlabs\Contracts\Data\Model\Model|mixed update(string $id, array $attributes = [], array $params = [], \Closure $dto_transform_fn = null)
     *
     * @param array ...$args
     */
    public function update(...$params);
}