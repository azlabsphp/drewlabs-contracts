<?php

namespace Drewlabs\Contracts\Data;

interface DataProviderHandlerParamsInterface
{

    /**
     * Returns the list of parameters to apply to the repository handler
     *
     * @return array
     */
    public function getParams();
}
