<?php

namespace Drewlabs\Contracts\EntityObject;

use Drewlabs\Contracts\Data\IModelable;
use Drewlabs\Contracts\Data\ModelInterface;

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
     * Generate a [[IDtoObject]] from a [[IModelable|\stdClass|array]] instance
     *
     * @param IModelable|ModelInterface|\stdClass|array $model
     * @param bool $with_guarded
     * @return IDtoObject
     */
    public function toObject($model, $with_guarded = false);

    /**
     * Generate a [[IModelable]] from a [[IDtoObject|IDtoObject|\stdClass|array]] instance
     *
     * @param IDtoObject|\stdClass|array $model
     * @return IModelable|ModelInterface
     */
    public function objectToModel($obj);

    /**
     * Build a [[IModelable[]]] from a [[IDtoObject[]]] instance
     *
     * @param IDtoObject[] $model
     * @return IModelable[]|ModelInterface[]
     */
    public function objectToModelList(array $obj);

    /**
     * Build a list of [[IDtoObject[]]] from a [[IModelable[]]] params
     *
     * @param IModelable[]|ModelInterface[]||\stdClass[]|array[] $values
     * @param bool $with_guarded
     * @return IDtoObject[]
     */
    public function toObjectList(array $values, $with_guarded = false);
}
