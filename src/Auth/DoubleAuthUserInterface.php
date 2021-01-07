<?php 

namespace Drewlabs\Contracts\Auth;

interface DoubleAuthUserInterface extends IUserModel
{

    /**
     * Get the auth model double authentication value
     *
     * @return int|boolean
     */
    public function getDoubleAuthActive();


    /**
     * Set the auth model double authentication value
     *
     * @return static
     */
    public function updateDoubleAuthActive($value = false);
}