<?php

namespace Drewlabs\Contracts;

interface Stateful
{

    /**
     * Set the state of the implementer class
     *
     * @param \stdClass|object|array|\Closure $state
     * @return static
     */
    public function setState($state);

    /**
     * Return the state property of the implementer class
     *
     * @return mixed
     */
    public function getState(): mixed;

    /**
     * Provide handler that return a boolean value indicating whether the object
     * has a state or not
     *
     * @return boolean
     */
    public function hasState(): bool;
}
