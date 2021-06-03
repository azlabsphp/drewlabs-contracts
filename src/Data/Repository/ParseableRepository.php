<?php

namespace Drewlabs\Contracts\Data\Repository;

use Drewlabs\Contracts\Data\Parser\ModelAttributeParser;

interface ParseableRepository
{

    /**
     * Create mappable model service class
     *
     * @return ModelAttributeParser
     */
    public function modelAttributesParser();

    /**
     * Bind the model attribute parser to the the model respository
     *
     * @return static
     */
    public function bindAttributesParser(ModelAttributeParser $parser);

}