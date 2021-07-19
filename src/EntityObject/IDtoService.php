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

namespace Drewlabs\Contracts\EntityObject;

use Drewlabs\Contracts\Data\Model\Model;

interface IDtoService
{
    /**
     * Bind [[IDtoObject]] class string to the current service.
     *
     * @return static
     */
    public function bindClass($dtoClassName);

    /**
     * Generate a [[IDtoObject]] from a [[Model|\stdClass|array]] instance.
     *
     * @param Model|\stdClass|array $model
     * @param bool                  $with_guarded
     *
     * @return IDtoObject
     */
    public function toObject($model, $with_guarded = false);

    /**
     * Generate a [[Model]] from a [[IDtoObject|IDtoObject|\stdClass|array]] instance.
     *
     * @return Model
     */
    public function objectToModel($obj);

    /**
     * Build a [[Model[]]] from a [[IDtoObject[]]] instance.
     *
     * @return Model[]
     */
    public function objectToModelList(array $obj);

    /**
     * Build a list of [[IDtoObject[]]] from a [[Model[]]] params.
     *
     * @param Model[]||\stdClass[]|array[] $values
     * @param bool                         $with_guarded
     *
     * @return IDtoObject[]
     */
    public function toObjectList(array $values, $with_guarded = false);
}
