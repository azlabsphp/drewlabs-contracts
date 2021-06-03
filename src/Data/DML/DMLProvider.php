<?php

namespace Drewlabs\Contracts\Data\DML;

use Drewlabs\Contracts\Data\DataProviderHandlerParamsInterface;
use Drewlabs\Contracts\Data\Model\Model;
use Drewlabs\Contracts\Data\DataProviderQueryResultInterface;

interface DMLProvider
{
    /**
     * Insert a new row to the database from the provided array
     *
     * @param array $attributes
     * @param array|DataProviderHandlerParamsInterface $params
     * @return Model|mixed
     */
    public function createFromAttribute(array $attributes, $params = []);

    /**
     * Insert a new row to the database from the model public properties/attributes
     *
     * @param array $attributes
     * @param array|DataProviderHandlerParamsInterface $params
     * @return Model|mixed
     */
    public function create(Model $model, $params = []);

    /**
     * Perform a DELETE operation on the models matching the provided query parameters
     * If $hot_operation is true, the operation is performed without call model database events
     * It returns the number of rows or items deleted
     *
     * @param array $query
     * @param bool $hot_operation
     * @return int|mixed
     */
    public function deleteAll(array $query, $hot_operation = false);

    /**
     * Remove the row matching the provided id from the database
     * 
     * It return true/false indicating whether the tow was deleted successfully
     *
     * @param string|int $id
     * @return boolean
     */
    public function deleteByID($id);

    /**
     * Takes a model as parameter and remove it from the database
     * It return true/false indicating whether the model was deleted successfully
     *
     * @param Model $model
     * @return boolean
     */
    public function delete(Model $model);

    /**
     * Retrieve all row/models matching a given query criteria from the database
     * 
     * $dto_transform_fn if passed in with try to apply data transformation to the return result.
     * 
     * Note: $dto_transform_fn must be a \Closure or PHP Callable that takes {DataProviderQueryResultInterface} as parameter
     * 
     * <code>
     * <?php
     *      $dml->selectAll($query, $columns, false, function(\Drewlabs\Contracts\Data\DataProviderQueryResultInterface $result ) {
     *          // Code to perform transformation
     *          return $transformed_values;
     *      })
     * ?>
     * </code>
     *
     * @param array|int|string $query
     * @param array $columns
     * @param bool|array $load_relations
     * @param \Closure $dto_transform_fn
     * @return DataProviderQueryResultInterface|mixed
     */
    public function selectAll($query = [], $columns = ['*'], $load_relations = false, \Closure $dto_transform_fn = null);
    
    /**
     * Retrieve a row/model matching a given $id from the database
     * 
     * $dto_transform_fn if passed in with try to apply data transformation to the return result.
     * 
     * Note: $dto_transform_fn must be a \Closure or PHP Callable that takes {Model} as parameter
     * 
     * <code>
     * <?php
     *      $dml->selectAll($query, $columns, false, function(\Drewlabs\Contracts\Data\Model\Model $model ) {
     *          // Code to perform transformation
     *          return $transformed_model;
     *      })
     * ?>
     * </code>
     *
     * @param [type] $id
     * @param array $columns
     * @param boolean $load_relations
     * @param \Closure $dto_transform_fn
     * @return void
     */
    public function select($id, $columns = ['*'], $load_relations = true, \Closure $dto_transform_fn = null);

    /**
     * Update / Patch rows in the database matching the query provided
     * 
     * Return the total number of updated items
     *
     * @param array $query
     * @param array $attributes
     * @param array|DataProviderHandlerParamsInterface $params
     * @return int|mixed
     */
    public function updateFromAttributes($query, array $attributes, $params = []);

    /**
     * Update a row/model from the database using the provided model values or attributes
     * 
     * Returns the update model with it properties or the transformed value returned the $dto_transform_fn callback
     *
     * @param Model $model
     * @param array|Model $attributes
     * @param array|DataProviderHandlerParamsInterface $params
     * @param \Closure|null $dto_transform_fn
     * @return Model
     */
    public function update(Model $model, $attributes = [], $params = [], \Closure $dto_transform_fn = null);

    /**
     * Update a model from the database using the provided $id parameter
     * 
     * Returns the update model with it properties or the transformed value returned the $dto_transform_fn callback
     *
     * @param [type] $id
     * @param array $attributes
     * @param array|DataProviderHandlerParamsInterface $params
     * @param \Closure|null $dto_transform_fn
     * @return Model
     */
    public function updateByID($id, $attributes = [], $params = [], \Closure $dto_transform_fn = null);
}