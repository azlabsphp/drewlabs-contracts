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

interface IVerifiable
{
    /**
     * Returns a boolean value indicationg whether the user is verified / Not.
     *
     * @return bool
     */
    public function isVerified();
}
