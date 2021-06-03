<?php

namespace Drewlabs\Contracts\Data\Filters;

interface FiltersInterface
{
    /**
     * @param mixed $model
     * @return mixed
     */
    public function apply($model);

    /**
     * Set the classs $query_criteria property to the value of the parameter
     *
     * @param array $list
     * @return static
     */
    public function setQueryFilters(array $list);
}
