<?php 

namespace Drewlabs\Contracts\Auth;

interface AuthorizationInterface
{
    /**
     * Return the unique identifier string of the authorization
     *
     * @return string
     */
    public function getLabel();
    /**
     * Return the UUID of the authorization
     *
     * @return string
     */
    public function getID();
}