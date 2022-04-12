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

interface IAuthenticatablePolicy
{
    /**
     * Check if the current authenticated user has a certain authorization group.
     *
     * @param string $group
     *
     * @return bool
     */
    public function hasAuthorizationGroup(AuthorizableInterface $user, $group);

    /**
     * Checks if the current authenticated user has an authorization group
     * in a list of authorization group.
     *
     * @param string[] $groups
     *
     * @return bool
     */
    public function hasAuthorizationGroupIn(AuthorizableInterface $user, array $groups);

    /**
     * Checks if the current authenticated user has all authorization groups
     * in a list of authorization groups provided.
     *
     * @param string[] $groups
     *
     * @return bool
     */
    public function hasAllAuthorizationGroups(AuthorizableInterface $user, array $groups);

    /**
     * Check if the current authenticated user has a certain authorization.
     *
     * @param string $authorization
     *
     * @return bool
     */
    public function hasAuthorization(AuthorizableInterface $user, $authorization);

    /**
     * Checks if the current authenticated user has an authorization
     * in a list of authorizations provided.
     *
     * @param string[] $authorizations
     *
     * @return bool
     */
    public function hasAuthorizationIn(AuthorizableInterface $user, array $authorizations);

    /**
     * Checks if the current authenticated user has all authorizations
     * in a list of authorizations provided.
     *
     * @param string[] $authorizations
     *
     * @return bool
     */
    public function hasAllAuthorizations(AuthorizableInterface $user, array $authorizations);
}
