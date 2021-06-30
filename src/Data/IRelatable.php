<?php

namespace Drewlabs\Contracts\Data;

/**
 * @deprecated v1.0
 */
interface IRelatable
{
    /**
     * Get the current model related tables|models
     *
     * @return array
     */
    public function getRelations();
}
