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

interface HasRelations
{
    /**
     * Depreated contract to get the list of configured model relations.
     *
     * @deprecated v2.x.0 will be remove in next major release
     * use {@see getDeclaredRelations()} instead
     *
     * @return string[]
     */
    public function getModelRelationLoadersNames();

    /**
     * Get the list of configured model relations.
     *
     * @return string[]
     */
    public function getDeclaredRelations();

    /**
     * Get all the loaded relations for the instance.
     *
     * @return array
     */
    public function getRelations();

    /**
     * Get a specified relationship.
     *
     * @param string $relation
     *
     * @return mixed
     */
    public function getRelation($relation);

    /**
     * Set the given relationship on the model.
     *
     * @param string $relation
     * @param mixed  $value
     *
     * @return $this
     */
    public function setRelation($relation, $value);
}
