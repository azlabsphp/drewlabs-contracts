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

interface AuthorizableInterface extends HasAbilities
{
    /**
     * Return the list of authorizations of the instance.
     *
     * @return string[]
     */
    public function getAuthorizations();

    /**
     * Return the list of authorization groups of the instance.
     *
     * @return string[]
     */
    public function getAuthorizationGroups();

    /**
     * Set the list of authorizations.
     *
     * @return self
     */
    public function setAuthorizations(array $value = []);

    /**
     * Set the list of authorizations groups.
     *
     * @return self
     */
    public function setAuthorizationGroups(array $value = []);
}
