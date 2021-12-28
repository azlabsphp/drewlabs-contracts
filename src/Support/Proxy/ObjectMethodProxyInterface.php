<?php

declare(strict_types=1);

/*
 * This file is part of the Drewlabs package.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Contracts\Support\Proxy;

interface ObjectMethodProxyInterface
{
    /**
     * {@link proxy()} method provide the same method definition and can be used as
     * an alternative.
     *
     * @param mixed    $method
     * @param array    $args
     * @param \Closure $default
     *
     * @return mixed
     */
    public function forwardCallTo($object, $method, $args = [], ?\Closure $default = null);

    /**
     * Provide a dynamic method proxy interface to the provided object.
     * if the specified method does not exists, the default method is called
     * instead.
     *
     * @param mixed    $method
     * @param array    $args
     * @param \Closure $default
     *
     * @return mixed
     */
    public function proxy($object, $method, $args = [], ?\Closure $default = null);
}
