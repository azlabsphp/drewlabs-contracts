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

namespace Drewlabs\Contracts\Notification;

interface Addressable
{
    /**
     * Compute the string value of the address.
     *
     * @return string
     */
    public function __toString();

    /**
     * Returns the identifier attached to the address object.
     *
     * @return string
     */
    public function id();

    /**
     * Returns the name attached to the address object.
     *
     * @return string|null
     */
    public function name();
}
