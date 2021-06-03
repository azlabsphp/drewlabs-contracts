<?php


namespace Drewlabs\Contracts\Data\Model;

interface Relatable
{
    /**
     * Get the list of configured model relations
     *
     * @return string[]
     */
    public function getModelRelationLoadersNames();
}