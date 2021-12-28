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

namespace Drewlabs\Contracts;

use Psr\Container\ContainerInterface;

interface Container extends ContainerInterface
{
    /**
     * Get all container values.
     *
     * @return array|mixed
     */
    public function all();

    /**
     * Set a value to a container key.
     *
     * @param string|callable|object $value
     *
     * @return self
     */
    public function set(string $key, $value);
}
