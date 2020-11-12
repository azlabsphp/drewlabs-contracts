<?php

namespace Drewlabs\Contracts\Data;

use Drewlabs\Contracts\Data\DataRepository\Repositories\IModelRepository;
use Drewlabs\Contracts\Data\DataRepository\Services\IModelAttributesParser;
use Drewlabs\Contracts\Data\RelatedModelInterface;

interface ParseableModelRepository extends IModelRepository
{

    /**
     * Set the current repository model
     *
     * @return ParseableModelInterface|ModelInterface|RelatedModelInterface
     */
    public function makeModel();

    /**
     * Create mappable model service class
     *
     * @return IModelAttributesParser
     */
    public function modelAttributesParser();

    /**
     * Bind the model attribute parser to the the model respository
     *
     * @return static
     */
    public function bindAttributesParser(IModelAttributesParser $parser);
}
