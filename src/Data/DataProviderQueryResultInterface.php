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

interface DataProviderQueryResultInterface extends \ArrayAccess
{
    /**
     * Returns the collection of data returned from the data provider query result.
     *
     * @return array|mixed
     */
    public function getCollection();

    /**
     * Handler for setting instance items.
     *
     * @param array|mixed $items
     *
     * @return static
     */
    public function setCollection($items);
}
