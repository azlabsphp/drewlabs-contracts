<?php

declare(strict_types=1);

/*
 * This file is part of the drewlabs namespace.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Contracts\Support\Actions;

interface ActionHandler
{
    /**
     * Handle a specific action and return a result. The callback is provided for handling
     * action after the action is performed.
     *
     * @param \Closure $callback
     *
     * @return ActionResult
     */
    public function handle(Action $action, \Closure $callback = null);
}
