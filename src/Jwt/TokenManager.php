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
     * Decode a string and return a payload if successful or throws an exception.
     *
     * @param string $token
     *
     * @return array|object
     */
    public function decodeToken($token);

    /**
     * Generate a Base64 encoded string containning connected user information, the issuser and validation data.
     *
     * @param array|object $claims
     *
     * @throws \RuntimeException;
     *
     * @return static
     */
    public function encodeToken($claims);

    /**
     * Revalidate a Base64 encoded string containning connected user information, the issuser and validation data.
     *
     * @param string $token
     *
     * @throws \RuntimeException;
     *
     * @return static
     */
    public function refreshToken($token);

    /**
     * Add a token to the blacklist.
     *
     * @param string $token
     *
     * @return bool
     */
    public function invalidateToken($token);

    /**
     * Payload factory getter.
     *
     * @return IPayloadFactory
     */
    public function payloadFactory();

    /**
     * Return the generated token string.
     *
     * @return string
     */
    public function getToken();
}
