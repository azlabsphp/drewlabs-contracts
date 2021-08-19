<?php

namespace Drewlabs\Contracts\Support\Proxy;

interface ObjectMethodProxyInterface
{
    /**
     * Provide a dynamic method proxy interface to the provided object.
     * if the specified method does not exists, the default method is called
     * instead
     * 
     * @param \stdClass|object $name
     * @param mixed $method 
     * @param array $args 
     * @param \Closure $default
     * @return mixed
     */
    public function forwardCallTo($object, $method, $args = [], \Closure $default = null);
}
