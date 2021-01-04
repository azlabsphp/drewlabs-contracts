<?php

namespace Drewlabs\Contracts\Data;

interface WithHiddenAttributesModelInterface
{
    /**
     * Returns the list of guarded attribute of an object or ORM Model
     *
     * @return array
     */
    public function getHidden();

    /**
     * Set the attached model hidden property
     *
     * @return static
     */
    public function setHidden(array $attributes);
}
