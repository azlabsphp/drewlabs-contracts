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

namespace Drewlabs\Contracts;

interface Stateful
{
    /**
     * Set the state of the implementer class.
     *
     * @param \stdClass|object|array|\Closure $state
     *
     * @return static
     */
    public function setState($state);

    /**
     * Return the state property of the implementer class.
     */
    public function getState(): mixed;

    /**
     * Provide handler that return a boolean value indicating whether the object
     * has a state or not.
     */
    public function hasState(): bool;
}
