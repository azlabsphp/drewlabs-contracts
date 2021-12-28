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

namespace Drewlabs\Contracts\Support\DataTransfertObject;

use Drewlabs\Contracts\Support\ArrayableInterface;

interface ListBridgeInterface
{
    /**
     * Build a list of ArrayableInterface from a list of object.
     *
     * @return ArrayableInterface[]
     */
    public function objectToModelList(array $obj);

    /**
     * Build a list of ObjectInterface from a list of ArrayableInterface params.
     *
     * @param ArrayableInterface[]||\stdClass[]|array[] $values
     * @param bool                                      $all
     *
     * @return ObjectInterface[]
     */
    public function toObjectList(array $values, $all = false);
}
