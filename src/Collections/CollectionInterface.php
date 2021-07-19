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

namespace Drewlabs\Contracts\Collections;

interface CollectionInterface extends \IteratorAggregate
{
    /**
     * Add an item to the collection based on key or value.
     *
     * @return self
     */
    public function add(...$args);

    /**
     * Copy all values from the source collection to the destination.
     *
     * @return self
     */
    public function addAll(self $values);

    /**
     * Get an item from the collection.
     *
     * @return mixed
     */
    public function get(...$args);

    /**
     * Remove an item from the collection instance.
     */
    public function remove(...$args): bool;

    /**
     * Flush the collection.
     */
    public function clear(): void;

    /**
     * Returns the size of the collection aka the total items
     * in the collection container.
     */
    public function size(): int;

    /**
     * Checks if the collection contains a specified key or value.
     */
    public function contains(...$args): bool;

    /**
     * Use {isEmpty} to check if the collection contains some
     * values or not.
     */
    public function isEmpty(): bool;

    /**
     * Serialize the instance into it array representation.
     */
    public function toArray(): array;
}
