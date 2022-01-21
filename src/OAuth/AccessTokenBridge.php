<?php

namespace Drewlabs\Contracts\OAuth;

interface AccessTokenBridge
{
    /**
     * Takes an oauth provider token and creates current package token type from it
     * 
     * @param mixed $token 
     * @return Token 
     */
    public function exchange($token);

}