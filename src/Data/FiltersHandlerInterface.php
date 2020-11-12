<?php

namespace Drewlabs\Contracts\Data;


/**
 * Interface FiltersHandlerInterface
 * @package Drewlabs\Contracts\Data
 */
interface FiltersHandlerInterface
{

    /**
     * @param bool $status
     * @return static
     */
    public function skipFilters($status = true);

    /**
     * @return mixed
     */
    public function getFilters();

    /**
     * @param ModelFiltersInterface $filter
     * @return static
     */
    public function getByFilter(ModelFiltersInterface $filter);

    /**
     * @param ModelFiltersInterface $filter
     * @return static
     */
    public function pushFilter(ModelFiltersInterface $filter);

    /**
     * @return static
     */
    public function applyFilter();
}
