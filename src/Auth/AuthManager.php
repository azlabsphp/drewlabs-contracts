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

namespace Drewlabs\Contracts\Auth;

use Exception;

interface AuthManager
{
    /**
     * Try authenticating user using authentication credentials
     *
     * @param array $credentials
     * @param bool $remember
     *
     * @throws Exception
     * @return bool
     */
    public function authenticate(array $credentials, bool $remember);

    /**
     * Log user out of the application
     *
     * @return void
     */
    public function logout($user);

    /**
     * Try authenticating user via it identifier and a remember token
     *
     * @param mixed $id
     * @param string $token
     * @throws Exception
     * @return bool
     */
    public function authenticateViaToken($id, $token);

    /**
     * Returns the authenticated user
     *
     * @return Authenticatable
     */
    public function user();

}