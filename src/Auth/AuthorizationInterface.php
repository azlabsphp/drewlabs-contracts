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

namespace Drewlabs\Contracts\Auth;

interface AuthorizationInterface
{
    /**
     * Returns the string representation of the instance.
     */
    public function __toString(): string;

    /**
     * Return the `id` of the authorization.
     *
     * @return string
     */
    public function getKey();
}
