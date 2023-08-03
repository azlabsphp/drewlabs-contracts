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

namespace Drewlabs\Contracts\Data\Model;

use Drewlabs\Contracts\Support\ArrayableInterface;

/**
 * @deprecated v0.2.x Please update code to use `drewlabs/query` implementation as this class will be removed in future release
 */
interface Model extends ArrayableInterface
{
    /**
     * Get the guarded attributes for the model.
     *
     * @return array
     */
    public function getGuarded();

    /**
     * Set the guarded attributes for the model.
     *
     * @return self
     */
    public function guard(array $guarded);

    /**
     * Determine if the given key is guarded.
     *
     * @param string $key
     *
     * @return bool
     */
    public function isGuarded($key);

    /**
     * Get the fillable attributes for the model.
     *
     * @return array
     */
    public function getFillable();

    /**
     * Set the fillable attributes for the model.
     *
     * @return $this
     */
    public function fillable(array $fillable);

    /**
     * Returns the primaryKey of the given model.
     *
     * @return string
     */
    public function getPrimaryKey();

    /**
     * Get the value of the primary key of the model.
     *
     * @return int|string|mixed
     */
    public function getKey();

    /**
     * Set the primary key of the model.
     *
     * @param int|string|mixed $value
     *
     * @return self
     */
    public function setKey($value);

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
     * As the {attributesToArray} method, it returns the model
     * properties as an associative array.
     *
     * @return array
     */
    public function getAttributes();
}
