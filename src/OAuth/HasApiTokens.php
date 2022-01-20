<?php

namespace Drewlabs\Contracts\OAuth;

interface HasApiTokens
{

    /**
     * Determine if the current API token has a given scope.
     *
     * @param  string  $ability
     * @return bool
     */
    public function tokenCan(string $ability);

    /**
     * Create a new personal access token for the user.
     *
     * @param  string  $name
     * @param  array  $abilities
     * @return Token|PersonalAccessToken
     */
    public function createToken(string $name, array $abilities = ['*']);

    /**
     * Get the access token currently associated with the user.
     *
     * @return HasAbilities|Token|PersonalAccessToken
     */
    public function currentAccessToken();

    /**
     * Set the current access token for the user.
     *
     * @param  HasAbilities  $accessToken
     * @return self
     */
    public function withAccessToken($accessToken);
}
