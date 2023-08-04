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

interface UserAccountInterface
{
    /**
     * Returns the account address property.
     *
     * @return string
     */
    public function getContact();

    /**
     * Return the account user name.
     *
     * @return string
     */
    public function getLogin();

    /**
     * Returns the generated account password for the verification code.
     *
     * @return string|null
     */
    public function getAccountPassword();

    /**
     * Returns the account type property value.
     *
     * @return string|int
     */
    public function getAccountType();
}
