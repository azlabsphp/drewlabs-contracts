<?php

namespace Drewlabs\Contracts\Auth;

use Drewlabs\Contracts\Auth\AuthorizationInterface;

interface AuthorizationGroupInterface extends AuthorizationInterface
{

    /**
     * Return the list of authorizations in the authorization group
     *
     * @return array|AuthorizationInterface[]|mixed
     */
    public function getAuthorizations();
}