<?php

namespace Drewlabs\Contracts\Data\Model;

interface GuardedModel
{
    /**
     * Returns the list of guarded attribute of an object or ORM Model
     *
     * @return array
     */
    public function getGuardedAttributes();
}