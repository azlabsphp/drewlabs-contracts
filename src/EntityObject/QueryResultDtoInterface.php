<?php

namespace Drewlabs\Contracts\EntityObject;

interface QueryResultDtoInterface extends IDtoService
{

    /**
     * Apply callable transformation algorithm to parameter
     *
     * @param array|DataProviderQueryResultInterface|mixed $values
     * @param callable|\Closure $callback
     * @return mixed
     */
    public function mapTo($values, callable $callback);
}
