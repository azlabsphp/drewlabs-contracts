<?php

namespace Drewlabs\Contracts\Support\Proxy;

interface DynamicMethodProxyInterface
{
    /**
     * Provide a dynamic method proxy interface to the current object.
     * if the specified method does not exists, the default method is called
     * instead
     * 
     * @param mixed $method 
     * @param array $args 
     * @param \Closure $default
     * @return mixed 
     */
    public function call($method, $args = [], \Closure $default = null);
}