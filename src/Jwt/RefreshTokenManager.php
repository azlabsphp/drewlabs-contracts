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

namespace Drewlabs\Contracts\Jwt;

use Drewlabs\Contracts\Auth\Authenticatable;
use Drewlabs\Core\Jwt\Exceptions\RefreshTokenExpiredException;
use Drewlabs\Core\Jwt\Exceptions\RefreshTokenNotFound;

interface RefreshTokenManager
{
    /**
     * Generate a refresh token from an authenticatable user.
     *
     * @return string
     */
    public function fromUser(Authenticatable $user);

    /**
     * Get the user matching a corresponding user.
     *
     * @param string $token
     *
     * @throws RefreshTokenExpiredException
     * @throws RefreshTokenNotFound
     *
     * @return Authenticatable
     */
    public function toUser($token);

    /**
     * This method takes a list of token and set the status value to 1, making then unusable.
     *
     * @return int
     */
    public function invalidateTokens(array $tokens = []);
}
