<?php

namespace Drewlabs\Contracts\Support\Actions;

use Closure;
interface ActionHandler
{
    /**
     * Handle a specific action and return a result. The callback is provided for handling
     * action after the action is performed
     * 
     * @param Action $action
     * @param Closure $callback
     * 
     * @return ActionResult|mixed
     */
    public function handle(Action $action, Closure $callback = null);
}