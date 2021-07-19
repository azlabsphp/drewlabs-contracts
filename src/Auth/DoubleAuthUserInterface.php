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

namespace Drewlabs\Contracts\Auth;

interface DoubleAuthUserInterface extends IUserModel
{
    /**
     * Get the auth model double authentication value.
     *
     * @return int|bool
     */
    public function getDoubleAuthActive();

    /**
     * Set the auth model double authentication value.
     *
     * @return static
     */
    public function updateDoubleAuthActive($value = false);
}
