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

namespace Drewlabs\Contracts\Support;

interface OverloadedMethodHandler
{
    /**
     * Return the list of arguments accepted by the callable.
     *
     * @return array
     */
    public function getArguments();

    /**
     * Check if overloaded method matches the called passed arguments.
     *
     * @return bool
     */
    public function matches(array $args = []);
}
