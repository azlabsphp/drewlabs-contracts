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

interface IAuthenticatableProvider
{
    /**
     * Retrieve a user based on it id.
     *
     * @param mixed $id
     *
     * @return Authenticatable
     */
    public function findById($id);

    /**
     * Retrieve a user based on a pre-saved token.
     *
     * @param string $token
     *
     * @return Authenticatable
     */
    public function findByToken(int $id, $token);

    /**
     * Retrieve user based on a certain credentials.
     *
     * @return Authenticatable
     */
    public function findByCrendentials(array $credentials);

    /**
     * Update Remembering token.
     *
     * @param string $token
     *
     * @return void
     */
    public function updateAuthRememberToken(Authenticatable $user, $token);

    /**
     * Validate a user against a certain credentials.
     *
     * @param Authenticatable
     *
     * @return bool
     */
    public function validateAuthCredentials(Authenticatable $user, array $credentials);
}
