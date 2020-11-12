<?php

namespace Drewlabs\Contracts\Data;

interface RelatedModelInterface
{
    /**
     * Get the list of configured model relations
     *
     * @return string[]
     */
    public function getModelRelationLoadersNames();
}
