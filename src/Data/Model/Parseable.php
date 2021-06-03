<?php

namespace Drewlabs\Contracts\Data\Model;

interface Parseable
{
    /**
     * Returns the fillable properties of the given model
     *
     * @return array
     */
    public function getFillables();
}