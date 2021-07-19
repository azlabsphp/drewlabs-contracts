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

namespace Drewlabs\Contracts\Factory;

interface IFactory
{
    /**
     * Make a new Factory class.
     *
     * @param mixed $type
     *
     * @return IFactory
     */
    public function make($type = null);

    /**
     * Resolve the constructed object.
     *
     * @return mixed
     */
    public function resolve();
}
