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

interface AccessTokenBridge
{
    /**
     * Takes an oauth provider token and creates current package token type from it.
     *
     * @param mixed $token
     *
     * @return Token
     */
    public function exchange($token);
}
