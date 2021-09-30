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

interface AuthorizableInterface extends IDrewlabsAuthorizable
{
    /**
     * Return the list of authorizations of the instance.
     *
     * @return string[]|AuthorizationInterface[]
     */
    public function getAuthorizations();

    /**
     * Return the list of authorization groups of the instance.
     *
     * @return string[]|AuthorizationGroupInterface[]
     */
    public function getAuthorizationGroups();

    /**
     * Set the list of authorizations on the AuthorizableInterface instance
     * 
     * @param array $value 
     * @return self 
     */
    public function setAuthorizations(array $value = []);

    /**
     * Set the list of authorizations groups on the AuthorizableInterface instance
     * 
     * @param array $value 
     * @return self 
     */
    public function setAuthorizationGroups(array $value = []);
}
