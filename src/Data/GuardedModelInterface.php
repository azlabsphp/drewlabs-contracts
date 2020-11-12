<?php

namespace Drewlabs\Contracts\Data;

interface GuardedModelInterface
{
    /**
     * Returns the list of guarded attribute of an object or ORM Model
     *
     * @return array
     */
    public function getGuardedAttributes();
}
