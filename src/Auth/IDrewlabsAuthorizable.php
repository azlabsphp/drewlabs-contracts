<?php

namespace Drewlabs\Contracts\Auth;

interface IDrewlabsAuthorizable
{
    /**
     * Determine if the entity has a given ability.
     *
     * @param  string  $ability
     * @param  array|mixed  $arguments
     * @return bool
     */
    public function can($ability, $arguments = []);

    /**
     * Determine if the entity does not have a given ability.
     *
     * @param  string  $ability
     * @param  array|mixed  $arguments
     * @return bool
     */
    public function cant($ability, $arguments = []);

    /**
     * Determine if the entity does not have a given ability.
     *
     * @param  string  $ability
     * @param  array|mixed  $arguments
     * @return bool
     */
    public function cannot($ability, $arguments = []);

    /**
     * returns the property holding the permissions of the authenticatable
     *
     * @return string
     */
    public function permissionPropertyName();

    /**
     * returns property holding permission groups of the authenticatable
     *
     * @return string
     */
    public function permissionGroupPropertyName();
}
