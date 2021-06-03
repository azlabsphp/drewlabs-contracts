<?php

namespace Drewlabs\Contracts\Data;

/** 
 * @package Drewlabs\Contracts\Data 
 * @deprecated Will be remove in next major release
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
