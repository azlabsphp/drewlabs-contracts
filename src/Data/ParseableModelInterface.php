<?php

namespace Drewlabs\Contracts\Data;

interface ParseableModelInterface
{
    /**
     * Returns the fillable properties of the given model
     *
     * @return array
     */
    public function getFillables();
}
