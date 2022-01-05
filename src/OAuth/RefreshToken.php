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

namespace Drewlabs\Contracts\OAuth;

interface RefreshToken
{
    /**
     * Revoke the token instance.
     *
     * @return bool
     */
    public function revoke();

    /**
     * Determine if the token is a transient JWT token.
     *
     * @return bool
     */
    public function transient();
}