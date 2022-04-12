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

interface TokenManager
{
    /**
     * Decode user provided access token string returning composed claims.
     *
     * @param string $token
     *
     * @return array|object
     */
    public function decodeToken($token);

    /**
     * Generates a personal access token from provided claims.
     *
     * @param array|object $claims
     *
     * @throws \Exception;
     *
     * @return mixed
     */
    public function encodeToken($claims);

    /**
     * Regenerate user provided token with new expiration date and claims.
     *
     * @param string $token
     *
     * @throws \Exception;
     *
     * @return static
     */
    public function refreshToken($token);

    /**
     * Revoke the user provided token.
     *
     * @param string $token
     *
     * @return bool
     */
    public function invalidateToken($token);
}
