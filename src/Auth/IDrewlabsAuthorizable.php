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

interface IDrewlabsAuthorizable
{
    /**
     * Determine if the entity has a given ability.
     *
     * @param string      $ability
     * @param array|mixed $arguments
     *
     * @return bool
     */
    public function can($ability, $arguments = []);

    /**
     * Determine if the entity does not have a given ability.
     *
     * @param string      $ability
     * @param array|mixed $arguments
     *
     * @return bool
     */
    public function cant($ability, $arguments = []);

    /**
     * Determine if the entity does not have a given ability.
     *
     * @param string      $ability
     * @param array|mixed $arguments
     *
     * @return bool
     */
    public function cannot($ability, $arguments = []);
}
