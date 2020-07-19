<?php

namespace Drewlabs\Contracts\Data;

use Drewlabs\Contracts\Data\DataRepository\Repositories\IModelRepository;

interface IModelFilter
{

    /**
     * @param $model
     * @param IModelRepository $repository
     * @return mixed
     */
    public function apply($model, IModelRepository $repository = null);

    /**
     * Set the classs $query_criteria property to the value of the parameter
     *
     * @param array $list
     * @return static
     */
    public function setQueryFilters(array $list);
}
