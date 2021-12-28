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

interface IUserModel extends IAuthenticatableInstanciatable
{
    /**
     * Fetch user from data storage matching the provided id.
     *
     * @return static
     */
    public function getUserById($id);

    /**
     * Fetch user by Credentials.
     *
     * @return static
     */
    public function fetchUserByCredentials(array $credentials);

    /**
     * Update the user remember_token in the data storage.
     *
     * @return void
     */
    public function updateUserRememberToken($id, $token);

    /**
     * Get the auth model unique identifier string.
     *
     * @return string
     */
    public function getUserName();

    /**
     * Get the auth model hashed password.
     *
     * @return string
     */
    public function getPassword();

    /**
     * Get the auth model activatation value.
     *
     * @return int
     */
    public function getIsActive();

    /**
     * Get the auth model rembering token value.
     *
     * @return string
     */
    public function getRememberToken();

    /**
     * User unique identifying key.
     *
     * @return mixed
     */
    public function getIdentifier();

    /**
     * Get the lock enable status of the user account.
     *
     * @return string
     */
    public function getLockEnabled();

    /**
     * Get the lock expiration date time.
     *
     * @return string
     */
    public function getLockExpireAt();

    /**
     * Get the lock expiration date time.
     *
     * @return string
     */
    public function getLoginAttempts();

    /**
     * Returns the user details attached to the user.
     *
     * @return \stdClass
     */
    public function getUserDetails();
}
