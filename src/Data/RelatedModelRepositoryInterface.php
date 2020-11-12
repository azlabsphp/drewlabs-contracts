<?php

namespace Drewlabs\Contracts\Data;

interface RelatedModelRepositoryInterface
{
    /**
     * Set identifier for querying relation or no
     *
     * @param boolean|array $value
     * @return static
     */
    public function queryRelation(bool $value = true);

    /**
     * load the current model along with the specified related/relationships
     *
     * @param string|array $relations
     * @return static
     */
    public function loadWith($relations);
}
