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

interface UserAccountVerificationAdapter
{
    /**
     * Verifies the user account using the provided `$token` parameter.
     */
    public function verify(VerificationTokenAware $account, string $token): bool;

    /**
     * Creates an instance of the user account verification token.
     */
    public function createVerificationToken(): UserAccountVerificationTokenInterface;
}
