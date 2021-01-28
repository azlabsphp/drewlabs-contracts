<?php

namespace Drewlabs\Contracts\Auth;

interface AuthorizableInterface extends IDrewlabsAuthorizable
{

    /**
     * Return the list of authorizations of the instance
     *
     * @return string[]
     */
    public function  getAuthorizations();

    /**
     * Return the list of authorization groups of the instance
     *
     * @return string[]
     */
    public function  getAuthorizationGroups();
}