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

interface UserInterface extends LockAware
{
    /**
     * return the `username` attribute or property name.
     */
    public function getUserNameAttributeName(): string;

    /**
     * return the `password` attribute or property name.
     */
    public function getPasswordAttributeName(): string;

    /**
     * return the `remember token` attribute or property name.
     */
    public function getRememberTokenAttributeName(): string;

    /**
     * return the `id` attribute or property name.
     */
    public function getIdentifierAttributeName(): string;

    /**
     * return the `login attempts` attribute or property name.
     */
    public function getLoginAttemptsAttributeName(): string;

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
     * Get the auth model double authentication value.
     *
     * @return int|bool
     */
    public function getDoubleAuthActive();

    /**
     * Set the auth model double authentication value.
     *
     * @return static
     */
    public function setDoubleAuthActive($value = false);
}
