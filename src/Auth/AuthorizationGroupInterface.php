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

/**
 * @deprecated v0.2.x
 */
interface AuthorizationGroupInterface extends AuthorizationInterface
{
    /**
     * Return the list of authorizations in the authorization group.
     *
     * @return array|AuthorizationInterface[]
     */
    public function getAuthorizations();
}
