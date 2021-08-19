<?php

namespace Drewlabs\Contracts\Support\Proxy;

interface ObjectMethodProxyInterface
{
    /**
     * {@link proxy()} method provide the same method definition and can be used as
     * an alternative
     * 
     * @param \stdClass|object $name
     * @param mixed $method 
     * @param array $args 
     * @param \Closure $default
     * @return mixed
     */
    public function forwardCallTo($object, $method, $args = [], \Closure $default = null);

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
    public function proxy($object, $method, $args = [], \Closure $default = null);
}
