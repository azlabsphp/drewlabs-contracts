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

namespace Drewlabs\Contracts\Support;

/**
 * @deprecated
 */
interface FuncArgument
{
    /**
     * Check if argument is optional or not.
     */
    public function isOptional(): bool;

    /**
     * Returns the argument type binded to the current Function argument.
     *
     * @return string|mixed
     */
    public function getType();
}
