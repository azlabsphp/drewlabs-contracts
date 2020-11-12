<?php

namespace Drewlabs\Contracts\Data;

use Drewlabs\Contracts\Data\DataRepository\Repositories\IModelRepository;
use Drewlabs\Contracts\Data\DataRepository\Services\IModelAttributesParser;

interface ParseableModelRepository extends IModelRepository
{
    /**
     * Checks if a model is an instance of IParsable class
     *
     * @return boolean
     */
    public function isInstanceOfIParsable();

    /**
     * Set the current repository model
     *
     * @return ParseableModelInterface|ModelInterface
     */
    public function makeModel();

    /**
     * Create mappable model service class
     *
     * @return IModelAttributesParser
     */
    public function modelAttributesParser();
}
