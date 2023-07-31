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

interface AuthorizableManager
{
    /**
     * Check if the current authenticated user has a certain authorization group.
     *
     * @param string|string[] $group
     *
     * @return bool
     */
    public function hasAuthorizationGroup(AuthorizationsAware $user, $group);

    /**
     * Checks if the current authenticated user has all authorization groups
     * in a list of authorization groups provided.
     *
     * @param string[] $groups
     *
     * @return bool
     */
    public function hasAuthorizationGroups(AuthorizationsAware $user, array $groups);

    /**
     * Check if the current authenticated user has a certain authorization.
     *
     * @param string|string[] $authorization
     *
     * @return bool
     */
    public function hasAuthorization(AuthorizationsAware $user, $authorization);

    /**
     * Checks if the current authenticated user has all authorizations
     * in a list of authorizations provided.
     *
     * @param string[] $authorizations
     *
     * @return bool
     */
    public function hasAuthorizations(AuthorizationsAware $user, array $authorizations);
}
