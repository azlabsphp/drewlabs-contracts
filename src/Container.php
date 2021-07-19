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

/**
 * Container is a key => value pair data structure implementation alowing to save
 * and retrieve values. It looks like a dictionnary.
 */
interface Container
{
    /**
     * Get an item from the container based on item $key.
     *
     * @return mixed
     */
    public function get($key);

    /**
     * Check if container has a given value.
     *
     * @param string $key
     */
    public function has($key): bool;

    /**
     * Get all container values.
     *
     * @return array|mixed
     */
    public function all();

    /**
     * Set a value to a container key.
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return void
     */
    public function set($key, $value);
}
