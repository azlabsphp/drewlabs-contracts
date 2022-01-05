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

interface PersonalAccessTokenFactory
{
    /**
     * Create a new personal access token.
     *
     * @param  mixed  $user
     * @param  string $name
     * @param  array  $scopes
     * @return PersonalAccessToken
     */
    public function make($user, $name, array $scopes = []);
}
