<?php

declare(strict_types=1);

/*
 * This file is part of the drewlabs namespace.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Contracts\OAuth;

interface PersonalAccessToken extends Token
{
    /**
     * @return Token
     */
    public function token();

    /**
     * Return the actual access token to be used for authorization.
     *
     * @return string
     */
    public function accessToken();
}
