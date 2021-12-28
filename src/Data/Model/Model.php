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

use Drewlabs\Contracts\Support\ArrayableInterface;

interface Model extends ArrayableInterface
{
    /**
     * Returns the primaryKey of the given model.
     *
     * @return string
     */
    public function getPrimaryKey();

    /**
     * Returns the value of the primary of the model.
     *
     * @return string
     */
    public function getKey();

    /**
     * Returns the collection associated with the given model.
     *
     * @return string
     */
    public function getTable();

    /**
     * Convert list of model attributes | properties into array.
     *
     * @return array
     */
    public function attributesToArray();

    /**
     * As the {attributesToArray} method, it returns the model public properties to an associative array.
     *
     * @return array
     */
    public function getAttributes();
}
