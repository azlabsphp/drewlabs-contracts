<?php

namespace Drewlabs\Contracts\Support\Actions;

use Drewlabs\Contracts\Support\ArrayableInterface;

interface ActionPayload extends ArrayableInterface
{
    /**
     * Returns the payload as an array object
     * 
     * @return array 
     */
    public function all();
}