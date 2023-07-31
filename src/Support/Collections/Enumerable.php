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

namespace Drewlabs\Contracts\Support\Collections;

interface Enumerable
{
    /**
     * Apply the transformation callback over each item element.
     *
     * @param \Closure|callable $callback
     *
     * @return self
     */
    public function map($callback, bool $preserve_key = true);

    /**
     * @param Closure $callback
     *
     * @throws RuntimeException
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public function each(\Closure $callback);

    /**
     * @param Closure $callback
     *
     * @return self
     */
    public function filter(\Closure $callback, bool $preserve_key = true);

    /**
     * @param Closure    $callback
     * @param mixed|null $initial
     *
     * @return mixed
     */
    public function reduce(\Closure $callback, $initial = null);

    /**
     * Get the first item in the collection but throw an exception if no matching items exist.
     *
     * @param mixed $key
     * @param mixed $operator
     * @param mixed $value
     *
     * @throws NotFoundException
     *
     * @return mixed
     */
    public function firstOrFail($key = null, $operator = null, $value = null);

    /**
     * Search the collection for a given value and return the corresponding key if successful.
     *
     * @param mixed $value
     * @param bool  $strict
     *
     * @return mixed
     */
    public function search($value, $strict = false);

    /**
     * Determine if an item exists in the collection by key.
     *
     * @param mixed $key
     *
     * @return bool
     */
    public function has($key);
}
