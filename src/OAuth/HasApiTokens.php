<?php

declare(strict_types=1);

/*
 * This file is part of the Drewlabs package.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Contracts\OAuth;

interface HasApiTokens
{
    /**
     * Determine if the current API token has a given scope.
     *
     * @return bool
     */
    public function tokenCan(string $ability);

    /**
     * Create a new personal access token for the user.
     *
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
     * @param HasAbilities $accessToken
     *
     * @return self
     */
    public function withAccessToken($accessToken);
}
