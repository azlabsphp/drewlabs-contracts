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

interface IAccountLockManager
{
    /**
     * Set the number of attempts that must be made before getting locked.
     *
     * @return static
     */
    public function setMaxAttempts(int $value);

    /**
     * Check if an authenticatable account is locked.
     *
     * @param mixed $account
     *
     * @return bool
     */
    public function isLocked($account);

    /**
     * Remove the lock on a given authenticable account.
     *
     * @param mixed $account
     *
     * @return void
     */
    public function removeLock($account);

    /**
     * Put a lock on a given account.
     *
     * @param mixed $account
     *
     * @return void
     */
    public function lock($account);

    /**
     * Increments the account failure attempts.
     *
     * @param mixed $account
     *
     * @return void
     */
    public function incrementFailureAttempts($account);
}
