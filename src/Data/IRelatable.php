<?php

namespace Drewlabs\Contracts\Data;

/**
 * @deprecated Will be remove in next major release
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
