<?php

namespace Drewlabs\Contracts\Support\Actions;

interface ActionHandler
{
    /**
     * Handle a specific action and return a result
     * 
     * @param Action $action
     * 
     * @return ActionResult|mixed
     */
    public function handle(Action $action);
}