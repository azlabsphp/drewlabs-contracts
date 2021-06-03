<?php

namespace Drewlabs\Contracts\EntityObject;

use Drewlabs\Contracts\Data\Model\Model;

interface IDtoService
{
    /**
     * Bind [[IDtoObject]] class string to the current service
     *
     * @param string $objectClass
     * @return static
     */
    public function bindClass($dtoClassName);

    /**
     * Generate a [[IDtoObject]] from a [[Model|\stdClass|array]] instance
     *
     * @param Model|\stdClass|array $model
     * @param bool $with_guarded
     * @return IDtoObject
     */
    public function toObject($model, $with_guarded = false);

    /**
     * Generate a [[Model]] from a [[IDtoObject|IDtoObject|\stdClass|array]] instance
     *
     * @param IDtoObject|\stdClass|array $model
     * @return Model
     */
    public function objectToModel($obj);

    /**
     * Build a [[Model[]]] from a [[IDtoObject[]]] instance
     *
     * @param IDtoObject[] $model
     * @return Model[]
     */
    public function objectToModelList(array $obj);

    /**
     * Build a list of [[IDtoObject[]]] from a [[Model[]]] params
     *
     * @param Model[]||\stdClass[]|array[] $values
     * @param bool $with_guarded
     * @return IDtoObject[]
     */
    public function toObjectList(array $values, $with_guarded = false);
}
