<?php

declare(strict_types=1);

/*
 * This file is part of the Drewlabs package.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Contracts\Data\DML;

interface DMLProvider
{
    /**
     * Insert a new row to the database.
     *
     * @param array ...$args
     */
    public function create(...$args);

    /**
     * Insert many row into the database.
     *
     * @return bool
     */
    public function createMany(array $attributes);

    /**
     * Perform a DELETE operation on the models matching the provided query parameters.
     *
     * @param array ...$args
     */
    public function delete(...$args);

    /**
     * Retrieve all row/models matching a given query criteria from the database.
     *
     * $dto_transform_fn if passed in with try to apply data transformation to the return result.
     *
     * Note: $dto_transform_fn must be a \Closure or PHP Callable that takes {EnumerableQueryResult} as parameter
     *
     * <code>
     * <?php
     *      $instance->select($query, $columns, false, function(\Drewlabs\Contracts\Data\EnumerableQueryResult $result ) {
     *          // Code to perform transformation
     *          return $transformed_values;
     *      })
     * ?>
     * </code>
     *
     * <code>
     * <?php
     *      $instance->select($id, $columns, false, function(\Drewlabs\Contracts\Data\Model\Model $model ) {
     *          // Code to perform transformation
     *          return $transformed_model;
     *      })
     * ?>
     * </code>
     *
     * @param array ...$args
     */
    public function select(...$args);

    /**
     * Update a row/model from the database.
     *
     * Returns the update model with it properties or the transformed value returned the $dto_transform_fn callback
     */
    public function update(...$params);

    /**
     * Run an aggregation method on a query builder result.
     *
     * @return int|mixed
     */
    public function selectAggregate(array $query = [], string $aggregation = 'count');
}
