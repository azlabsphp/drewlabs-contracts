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

namespace Drewlabs\Contracts\Support\Actions;

interface Action
{
    /**
     * Returns the action type as string.
     *
     * @return string
     */
    public function type();

    /**
     * @return ActionPayload|array|mixed
     */
    public function payload();
}
