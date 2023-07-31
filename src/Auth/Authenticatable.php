<?php

declare(strict_types=1);

/*
 * This file is part of the drewlabs namespace.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Contracts\Auth;

interface Authenticatable
{
    /**
     * Get unique identifier key name.
     *
     * @return string
     */
    public function authIdentifierName();

    /**
     * Get the unique identifier value.
     *
     * @return mixed
     */
    public function authIdentifier();

    /**
     * Get password of the authenticated user.
     *
     * @return string
     */
    public function authPassword();

    /**
     * Get string representation of the auth password field.
     *
     * @return string
     */
    public function authPasswordName();

    /**
     * Get token of the authenticated user.
     *
     * @param string|null $token
     *
     * @return string
     */
    public function rememberToken($token = null);

    /**
     * Get token key name.
     *
     * @return string
     */
    public function rememberTokenName();

    /**
     * Get the value of the unique identifying field other than the id.
     *
     * @return mixed
     */
    public function getAuthUserName();

    /**
     * Return the authenticatable user details.
     *
     * @return mixed
     */
    public function getUserDetails();
}
