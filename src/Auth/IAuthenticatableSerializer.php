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

namespace Drewlabs\Contracts\Auth;

interface IAuthenticatableSerializer
{
    /**
     * Genereate an [Authenticatable] instance from a provided parameter object.
     *
     * @param mixed|\stdClass $obj
     * @param bool            $withRelated
     *
     * @return \Drewlabs\Contracts\Auth\Authenticatable
     */
    public function deserialize($obj, $withRelated = true);

    /**
     * Returns a serialized representation of an authenticatable object for better usage on the front end.
     *
     * @param \Drewlabs\Contracts\Auth\Authenticatable|\Drewlabs\Core\Auth\User $user
     *
     * @return \stdClass|object
     */
    public function serialize($user);
}
