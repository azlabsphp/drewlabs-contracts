<?php

namespace Drewlabs\Contracts\Jwt;

use Drewlabs\Contracts\Auth\Authenticatable;
use Drewlabs\Contracts\Auth\IAuthenticatableProvider;
use Drewlabs\Contracts\Jwt\TokenManager;

interface JwtAuthInterface
{
    /**
     * Set an authenticatable user from a JWT token present in the HTTP header
     *
     * @param  Authenticatable $user
     * @param array  $custom_claims
     *
     * @return string A signed JWT
     *
     */
    public function fromUser(Authenticatable $user, $custom_claims = []);

    /**
     * Generate an authentication token from an authentiicatable entity
     *
     * @param string  $token
     *
     * @return Authenticatable
     * @throws \RuntimeException
     */
    public function toUser($token);

    /**
     * Invalidate jwt token
     *
     * @param string  $token
     *
     * @return void
     *
     */
    public function invalidate($token);

    /**
     * Parse request and return jwt token
     *
     * @param string $method
     * @param string $header
     * @param string $query
     *
     * @throws TokenNotFoundException
     * @return string
     */
    public function parseToken($method = 'bearer', $header = 'authorization', $query = 'token');

    /**
     * Set the request user provider
     *
     * @param IAuthenticatableProvider $user
     *
     * @return static
     */
    public function setAuthenticatableProvider(IAuthenticatableProvider $user);

    /**
     * Get the token manager instance
     *
     * @return TokenManager
     */
    public function manager();
    
    /**
     * Return an instance of the jwt token payload validator
     *
     * @return PayloadVerifier
     */
    public function payloadValidator();
}
