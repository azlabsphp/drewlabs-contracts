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

namespace Drewlabs\Contracts\Support\Proxy;

interface CallProxyInterface
{
    /**
     * Provide a dynamic method proxy interface to the current object.
     * if the specified method does not exists, the default method is called
     * instead.
     *
     * @param mixed    $method
     * @param array    $args
     * @param \Closure $default
     *
     * @return mixed
     */
    public function call($method, $args = [], \Closure $default = null);
}
