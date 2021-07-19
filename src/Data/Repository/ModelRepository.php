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

namespace Drewlabs\Contracts\Data\Repository;

interface ModelRepository
{
    /**
     * Get a collection of model from the data storage.
     *
     * @return mixed
     */
    public function all($columns = ['*']);

    /**
     * Run model paginate query.
     *
     * @param int   $perPage
     * @param array $columns
     *
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = ['*']);

    /**
     * Add or insert new record to the data storage.
     */
    public function insert(...$args);

    /**
     * Create many model entries in the data storage.
     *
     * @param array ...$args
     */
    public function insertMany(...$args);

    /**
     * Return a new model matching a certain condition.
     *
     * @param array ...$args
     */
    public function find(...$args);

    /**
     * Return a new model with the given id.
     *
     * @deprecated v3.0.1 Use the {@see find()} overloaded method that takes in an id
     *
     * @return mixed
     */
    public function findById(int $id, array $columns = ['*']);

    /**
     * Update a given record in the data storage using model id.
     *
     * @deprecated v3.0.1 Use {@see update($id, array $attributes)} method overload instead
     *
     * @param int $id
     *
     * @return int
     */
    public function updateById($id, array $data, bool $parse_inputs = true);

    /**
     * Update a given record in the data storage based on condition.
     *
     * @param array ...$args
     */
    public function update(...$args);

    /**
     * Delete record from data storage based on model id.
     *
     * @param int|mixed $id
     *
     * @return int
     */
    public function deleteById($id);

    /**
     * Delete record from data storage based on condition.
     *
     * @param array ...$args
     */
    public function delete(...$args);

    /**
     * Get the current repository model class name.
     *
     * @return string
     */
    public function getModel();
}