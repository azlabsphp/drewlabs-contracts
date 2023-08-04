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

interface UserAccountVerificationTokenInterface
{
    /**
     * Retuns the verification token as string.
     */
    public function __toString(): string;

    /**
     * Returns the plain text verification token.
     */
    public function getPlainText(): string;

    /**
     * Returns the hashed verification token.
     */
    public function getHashed(): string;
}
