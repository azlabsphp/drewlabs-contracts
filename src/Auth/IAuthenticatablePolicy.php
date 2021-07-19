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

use Drewlabs\Contracts\Auth\Authenticatable as IAuthenticatable;

interface IAuthenticatablePolicy
{
    /**
     * Check if the current authenticated user has a certain role.
     *
     * @deprecated v1.2 Will be remove in next release
     *
     * @param IAuthenticatable
     * @param string $role
     *
     * @return bool
     */
    public function hasRole(IAuthenticatable $user, $role);

    /**
     * Checks if the current authenticated user has a role in a list of roles.
     *
     * @deprecated v1.2 Will be remove in next release
     *
     * @param IAuthenticatable
     * @param array[string] $roles
     *
     * @return bool
     */
    public function hasRoleIn(IAuthenticatable $user, array $roles);

    /**
     * Checks if the current authenticated user has a permission in it mapping role and permissions.
     *
     * @deprecated v1.2 Will be remove in next release
     *
     * @param IAuthenticatable
     * @param string|int $permission
     *
     * @return bool
     */
    public function hasPermission(IAuthenticatable $user, $permission);

    /**
     * Checks if the current authenticated user has a permission in a list of permission.
     *
     * @deprecated v1.2 Will be remove in next release
     *
     * @param IAuthenticatable
     * @param array[string] $permissions
     *
     * @return bool
     */
    public function hasPermissionIn(IAuthenticatable $user, array $permissions);

    /**
     * Checks if a given user has an administrator role.
     *
     * @return bool
     */
    public function hasAdminRole(IAuthenticatable $user);

    /**
     * Check if the current authenticated user has a certain authorization group.
     *
     * @param AuthorizationGroupInterface $group
     *
     * @return bool
     */
    public function hasAuthorizationGroup(AuthorizableInterface $user, $group);

    /**
     * Checks if the current authenticated user has an authorization group
     * in a list of authorization group.
     *
     * @param AuthorizableInterface
     * @param array[string] $groups
     *
     * @return bool
     */
    public function hasAuthorizationGroupIn(AuthorizableInterface $user, array $groups);

    /**
     * Checks if the current authenticated user has all authorization groups
     * in a list of authorization groups provided.
     *
     * @param AuthorizableInterface
     * @param array[string] $groups
     *
     * @return bool
     */
    public function hasAllAuthorizationGroups(AuthorizableInterface $user, array $groups);

    /**
     * Check if the current authenticated user has a certain authorization.
     *
     * @param AuthorizationInterface $authorization
     *
     * @return bool
     */
    public function hasAuthorization(AuthorizableInterface $user, $authorization);

    /**
     * Checks if the current authenticated user has an authorization
     * in a list of authorizations provided.
     *
     * @param AuthorizableInterface
     * @param array[string]|AuthorizationInterface[] $authorizations
     *
     * @return bool
     */
    public function hasAuthorizationIn(AuthorizableInterface $user, array $authorizations);

    /**
     * Checks if the current authenticated user has all authorizations
     * in a list of authorizations provided.
     *
     * @param AuthorizableInterface
     * @param array[string]|AuthorizationInterface[] $authorizations
     *
     * @return bool
     */
    public function hasAllAuthorizations(AuthorizableInterface $user, array $authorizations);
}
