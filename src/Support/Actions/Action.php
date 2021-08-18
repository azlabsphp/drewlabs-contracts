<?php

namespace Drewlabs\Contracts\Support\Actions;


interface Action
{
    /**
     * Returns the action type as string
     * 
     * @return string 
     */
    public function type();

    /**
     * 
     * @return ActionPayload
     */
    public function payload();
}