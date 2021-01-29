<?php

namespace Drewlabs\Contracts\Auth;

interface AuthorizableInterface extends IDrewlabsAuthorizable
{

    /**
     * Return the list of authorizations of the instance
     *
     * @return string[]|AuthorizationInterface[]
     */
    public function getAuthorizations();

    /**
     * Return the list of authorization groups of the instance
     *
     * @return string[]|AuthorizationGroupInterface[]
     */
    public function  getAuthorizationGroups();
}