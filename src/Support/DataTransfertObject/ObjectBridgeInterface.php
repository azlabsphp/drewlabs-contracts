<?php

namespace Drewlabs\Contracts\Support\DataTransfertObject;

use Drewlabs\Contracts\Support\ArrayableInterface;


interface ObjectBridgeInterface
{
    /**
     * Generate an instance of ObjectInterface.
     *
     * @param ArrayableInterface|\stdClass|array $model
     * @param bool                  $all
     *
     * @return ObjectInterface
     */
    public function toObject($model, $all = false);

    /**
     * Generate a {ArrayableInterface} from a {ObjectInterface} instance.
     *
     * @param ObjectInterface|\stdClass|array $model
     * 
     * @return ArrayableInterface
     */
    public function objectToModel($obj);

    /**
     * Bind the output type/object/interface to the bridge class
     * 
     * @param string $name
     * 
     * @return self
     */
    public function bindClass($name);
}
