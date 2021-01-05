<?php 

namespace Drewlabs\Contracts\U2fa;

use Drewlabs\Contracts\Auth\Authenticatable;

/**
 * @package Drewlabs\Contracts
 * 
 * This interface provides method definitions for handling request authorization for two factor
 * authentication process
 */
interface U2faAuthorizationTokenInterface
{
    /**
     * Create an authorization token from the authenticated user
     * 
     * @param Authenticatable $user
     * 
     * @return static
     */
    public function fromUser(Authenticatable $user);


    /**
     * Validate user provided token
     * 
     * @param string $token
     * 
     * @return static
     */
    public function fromToken($token);

    /**
     * Returned an user instance from the user provided token
     * 
     * @return Authenticatable
     */
    public function toUser();

    /**
     * Returns the string representation of the authorization token
     *
     * @return string
     */
    public function toString();

}