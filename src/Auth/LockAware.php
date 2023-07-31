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

interface LockAware
{
    /**
     * return the `locked` attribute or property name.
     */
    public function getLockedAttributeName(): string;

    /**
     * return the `lock expires at` attribute or property name.
     */
    public function getLockExpiresAtAttributeName(): string;

    /**
     * Get the lock enable status of the user account.
     *
     * @return string
     */
    public function getLockEnabled();

    /**
     * Get the lock expiration date time.
     *
     * @return string
     */
    public function getLockExpireAt();

    /**
     * Get the lock expiration date time.
     *
     * @return string
     */
    public function getLoginAttempts();
}
