<?php

namespace Drewlabs\Contracts\Data;

use Drewlabs\Contracts\Data\Filters\FiltersInterface;

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
     * @param FiltersInterface $filter
     * @return static
     */
    public function getByFilter(FiltersInterface $filter);

    /**
     * @param FiltersInterface $filter
     * @return static
     */
    public function pushFilter(FiltersInterface $filter);

    /**
     * @return static
     */
    public function applyFilter();
}
