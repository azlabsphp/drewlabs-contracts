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

interface IAuthenticatableInstanciatable
{
    /**
     * Get user model from an instance of the Authenticatable class.
     *
     * @return static
     */
    public function fromAuthenticatable(Authenticatable $authenticatable);

    /**
     * Build an authenticatable instance from the curren object.
     *
     * @return Authenticatable
     */
    public function toAuthenticatable(bool $loadRelations = true);
}
