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

namespace Drewlabs\Contracts\U2fa;

use Drewlabs\Contracts\Auth\Authenticatable;
use Psr\Http\Message\ServerRequestInterface as Request;

interface U2faAuthorizationTokenInterface
{
    /**
     * Create an authorization token from the authenticated user.
     *
     * @return static
     */
    public function fromUser(Authenticatable $user);

    /**
     * Set / Load Authorization token from a string.
     *
     * @param string $token
     *
     * @return static
     */
    public function fromToken($token);

    /**
     * Set / Load Authorization token from the request instance.
     *
     * @return static
     */
    public function fromRequest(Request $request);

    /**
     * Returned an user instance from the user provided token.
     *
     * @return Authenticatable
     */
    public function toUser();

    /**
     * Returns the string representation of the authorization token.
     *
     * @return string
     */
    public function toString();

    /**
     * Validate the authorization token provided by the application user.
     *
     * @throws \RuntimeException
     *
     * @return static
     */
    public function validate(?Request $request = null);

    /**
     * Invalidate the authorization token.
     *
     * @param string|null $token
     *
     * @throws \RuntimeException
     *
     * @return static
     */
    public function invalidate($token);
}
