<?php

namespace Drewlabs\Contracts\Support;

interface FuncArgument
{
    /**
     * Is argument optional or not
     * 
     * @return bool 
     */
    public function isOptional(): bool;

    /**
     * Returns the argument type binded to the current Function argument.
     *
     * @return string|mixed
     */
    public function getType();
}
