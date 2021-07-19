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

namespace Drewlabs\Contracts\Jwt;

interface BlacklistManager
{
    /**
     * Add the token (jti claim) to the blacklist.
     *
     * @param array|object $payload
     *
     * @return bool
     */
    public function add($payload);

    /**
     * Determine whether the token has been blacklisted.
     *
     * @param array|object $payload
     *
     * @return bool
     */
    public function has($payload);

    /**
     * Remove the token (jti claim) from the blacklist.
     *
     * @param array|object $payload
     *
     * @return bool
     */
    public function remove($payload);

    /**
     * Refresh or reinitialise tokens blacklist.
     *
     * @return bool
     */
    public function clear();
}
