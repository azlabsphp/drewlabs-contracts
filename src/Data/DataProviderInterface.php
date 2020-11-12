<?php

namespace Drewlabs\Contracts\Data;

interface DataProviderInterface
{

    /**
     * Add new folder configuration to folders collection entries
     *
     * @param array $attributes
     * @param array|DataProviderHandlerParamsInterface $params
     * @return ModelInterface|ModelInterface[]|boolean
     */
    public function create(array $attributes, $params = []);

    /**
     * Removes folder matching the provided id from the storage
     *
     * @param int|string|array $query
     * @param bool $shouldMassDelete
     * @return int|mixed
     */
    public function delete($query, $shouldMassDelete = false);

    /**
     * Returns a list of folde matching a given query parameters. If columns are specified, only the specified columns are loaded
     *
     * @param array|int|string $query
     * @param array $columns
     * @param bool|array $relationQuery
     * @param bool $shouldQueryRelations
     * @param int|null $limit
     * @return DataProviderInterfaceQueryResult|ModelInterface[]|array|mixed
     */
    public function get($query = [], $columns = ['*'], $relationQuery = false, $shouldPaginate = false, $limit = null);

    /**
     * Return a modelable item  matching the provided id
     *
     * @param string|int $id
     * @return Model
     */
    public function getById($id);

    /**
     * Modify folder, matching the provided query parameters, attributes
     *
     * @param int|string|array $query
     * @param array $attributes
     * @param array|DataProviderHandlerParamsInterface $params
     * @return int|mixed
     */
    public function modify($query, array $attributes, $params = []);
}
