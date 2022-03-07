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
use Drewlabs\Contracts\Auth\IAuthenticatableProvider;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * @deprecated v2.x Will be remove in v3.x
 * 
 * @package Drewlabs\Contracts\Jwt
 */
interface JwtAuthInterface
{
    /**
     * Set an authenticatable user from a JWT token present in the HTTP header.
     *
     * @param array $custom_claims
     *
     * @return string A signed JWT
     */
    public function fromUser(Authenticatable $user, $custom_claims = []);

    /**
     * Generate an authentication token from an authentiicatable entity.
     *
     * @param string $token
     *
     * @throws \RuntimeException
     *
     * @return Authenticatable
     */
    public function toUser($token);

    /**
     * Invalidate jwt token.
     *
     * @param string $token
     *
     * @return void
     */
    public function invalidate($token);

    /**
     * Parse request and return jwt token.
     *
     * @param string $method
     * @param string $header
     * @param string $query
     *
     * @throws TokenNotFoundException
     *
     * @return string
     */
    public function parseToken($method = 'bearer', $header = 'authorization', $query = 'token');

    /**
     * Set the request user provider.
     *
     * @return static
     */
    public function setAuthenticatableProvider(IAuthenticatableProvider $user);

    /**
     * Set the request wrapper object.
     *
     * @param Request|null $request
     *
     * @return static
     */
    public function setRequest(Request $request);

    /**
     * Get the token manager instance.
     *
     * @return TokenManager
     */
    public function manager();

    /**
     * Return an instance of the jwt token payload validator.
     *
     * @return PayloadVerifier
     */
    public function payloadValidator();
}
