<?php

namespace Drewlabs\Contracts\Support\Actions;

interface ActionResult
{
    /**
     * Retuns the value holds in the action result
     * 
     * @return mixed 
     */
    public function value();
}