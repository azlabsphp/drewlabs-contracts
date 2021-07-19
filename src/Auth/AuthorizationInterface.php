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

interface AuthorizationInterface
{
    /**
     * Return the unique identifier string of the authorization.
     *
     * @return string
     */
    public function getLabel();

    /**
     * Return the UUID of the authorization.
     *
     * @return string
     */
    public function getID();
}
