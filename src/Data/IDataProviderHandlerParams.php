<?php

namespace Drewlabs\Contracts\Data;

/** 
 * @package Drewlabs\Contracts\Data 
 * 
 * @deprecated v1.0
 * */
interface IDataProviderHandlerParams extends DataProviderHandlerParamsInterface
{
    /**
     * Returns the list of parameters to apply to the repository handler
     *
     * @return array
     */
    public function getParams();
}
