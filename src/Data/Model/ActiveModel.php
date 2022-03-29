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

namespace Drewlabs\Contracts\Data\Model;

/**
 * @deprecated v2.2.x Prefer usage of data persistence layer over active record
 *             implementation. Model should just represent a state, that should
 *             persist using a persitence layer
 * 
 * @package Drewlabs\Contracts\Data\Model
 */
interface ActiveModel extends Model
{
    /**
     * Insert new item to the data store.
     *
     * @return mixed
     */
    public function add(array $items);

    /**
     * Fetch all data from the data storage with their related relationship.
     *
     * @return mixed
     */
    public function getAll(bool $relations = false, array $columns = ['*']);
}
