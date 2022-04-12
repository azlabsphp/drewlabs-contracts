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

namespace Drewlabs\Contracts\Data;

interface EnumerableQueryResult extends \ArrayAccess
{
    /**
     * Returns collection items.
     *
     * @return mixed
     */
    public function getCollection();

    /**
     * Same as getCollection() but for framework compatibility.
     *
     * @return mixed
     */
    public function items();

    /**
     * Set result items.
     *
     * @param mixed $items
     *
     * @return static
     */
    public function setCollection($items);
}
