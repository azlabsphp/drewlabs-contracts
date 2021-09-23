<?php

namespace Drewlabs\Contracts\Support;

/**
 * Defines a type that reference methods with optional parameters
 * 
 * @package Drewlabs\Contracts\Support
 */
interface OverloadedPartialMethodHandler extends OverloadedMethodHandler
{
    /**
     * Return the list of optional arguments declared by the callable.
     *
     * @return string[]|FuncArgument[]|NamedFuncArgument[]
     */
    public function getOptionalArguments();

    /**
     * Return the list of required arguments declared by the callable.
     *
     * @return string[]|FuncArgument[]|NamedFuncArgument[]
     */
    public function getRequiredArguments();
}