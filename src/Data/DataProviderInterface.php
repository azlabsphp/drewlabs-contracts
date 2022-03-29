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

namespace Drewlabs\Contracts\Data;

use Drewlabs\Contracts\Data\Model\Model;

/**
 * @deprecated v2.4.x Previously maintains for compatibility reasons
 *             with old projects implementations
 *             Will be remove in next major release. Prefer use of @see ActionHandler}
 *             which provide a uniform comand interface via {ActionHandler::handle()}
 *             method
 * 
 * @package Drewlabs\Contracts\Data
 */
interface DataProviderInterface
{
    /**
     * Add new folder configuration to folders collection entries.
     *
     * @param array|DataProviderHandlerParamsInterface $params
     *
     * @return Model|mixed
     */
    public function create(array $attributes, $params = []);

    /**
     * Removes folder matching the provided id from the storage.
     *
     * @param int|string|array $query
     * @param bool             $shouldMassDelete
     *
     * @return int|mixed
     */
    public function delete($query, $shouldMassDelete = false);

    /**
     * Returns a list of folde matching a given query parameters. If columns are specified, only the specified columns are loaded.
     *
     * @param array|int|string $query
     * @param array            $columns
     * @param bool|array       $relationQuery
     * @param int|null         $limit
     *
     * @return DataProviderInterfaceQueryResult|mixed
     */
    public function get($query = [], $columns = ['*'], $relationQuery = false, $shouldPaginate = false, $limit = null);

    /**
     * Return a modelable item  matching the provided id.
     *
     * @param string|int $id
     *
     * @return Model
     */
    public function getById($id);

    /**
     * Modify folder, matching the provided query parameters, attributes.
     *
     * @param int|string|array                         $query
     * @param array|DataProviderHandlerParamsInterface $params
     *
     * @return int|mixed
     */
    public function modify($query, array $attributes, $params = []);
}
