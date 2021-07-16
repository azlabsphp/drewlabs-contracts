<?php

namespace Drewlabs\Contracts\Collections;

use IteratorAggregate;

interface CollectionInterface extends IteratorAggregate
{
    /**
     * Add an item to the collection based on key or value
     *
     * @return self
     */
    public function add(...$args);

    /**
     * Copy all values from the source collection to the destination
     *
     * @param self $values
     * @return self
     */
    public function addAll(self $values);

    /**
     * Get an item from the collection
     *
     * @return mixed
     */
    public function get(...$args);

    /**
     * Remove an item from the collection instance
     *
     * @return boolean
     */
    public function remove(...$args): bool;

    /**
     * Flush the collection
     *
     * @return void
     */
    public function clear(): void;

    /**
     * Returns the size of the collection aka the total items
     * in the collection container
     *
     * @return integer
     */
    public function size(): int;

    /**
     * Checks if the collection contains a specified key or value
     *
     * @return boolean
     */
    public function contains(...$args): bool;

    /**
     * Use {isEmpty} to check if the collection contains some 
     * values or not
     *
     * @return boolean
     */
    public function isEmpty(): bool;

    /**
     * Serialize the instance into it array representation
     *
     * @return array
     */
    public function toArray(): array;
}