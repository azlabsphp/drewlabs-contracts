<?php 

namespace Drewlabs\Contracts\U2fa;

use Drewlabs\Contracts\Auth\Authenticatable;
use Psr\Http\Message\ServerRequestInterface as Request;

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
     * Set / Load Authorization token from a string
     * 
     * @param string $token
     * 
     * @return static
     */
    public function fromToken($token);

    /**
     * Set / Load Authorization token from the request instance
     * 
     * @param Request $token
     * 
     * @return static
     */
    public function fromRequest(Request $request);

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

    /**
     * Validate the authorization token provided by the application user
     *
     * @throws \RuntimeException
     * 
     * @param Request|null $request
     * @return static
     */
    public function validate(Request $request = null);
    
    /**
     * Invalidate the authorization token
     *
     * @throws \RuntimeException
     *
     * @param string|null $token
     * @return static
     */
    public function invalidate($token = null);

}