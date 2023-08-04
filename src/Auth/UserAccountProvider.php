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

interface UserAccountProvider
{
    /**
     * Finds user account using the provided `$accountId` parameter.
     */
    public function findById(string $accountId): ?UserAccountInterface;

    /**
     * Checks if the user account is verified.
     */
    public function isVerified(UserAccountInterface $account): bool;

    /**
     * Checks if user account verification token has expired.
     */
    public function verificationExpired(UserAccountInterface $account): bool;

    /**
     * Mark user account as verified.
     *
     * @return void
     */
    public function markAsVerified(UserAccountInterface $account);

    /**
     * Create user from user account instance. If a callback is provided, the callback
     * is invoked with the user account as 1st parameter and the user as second parameter.
     *
     * @return mixed
     */
    public function createUser(UserAccountInterface $account, \Closure $callback = null);

    /**
     * Update user for a given user account.
     *
     * @return mixed
     */
    public function updateUser(UserAccountInterface $account, \Closure $callback = null);
}
