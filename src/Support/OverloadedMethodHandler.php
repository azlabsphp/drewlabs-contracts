<?php

namespace Drewlabs\Contracts\Support;

interface OverloadedMethodHandler
{
    /**
     * Return the list of arguments accepted by the callable
     *
     * @return array
     */
    public function getArguments();

    /**
     * Check if overloaded method matches the called passed arguments
     *
     * @param array $args
     * @return bool
     */
    public function matches(array $args = []);
}