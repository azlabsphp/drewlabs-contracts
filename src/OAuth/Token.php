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

interface Token extends HasAbilities
{
    /**
     * Revoke the token instance.
     *
     * @return bool
     */
    public function revoke();

    /**
     * Determine if the token is a transient JWT token.
     *
     * @return bool
     */
    public function transient();
}
