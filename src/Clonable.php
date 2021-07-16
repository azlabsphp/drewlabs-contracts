<?php

namespace Drewlabs\Contracts;


/** @package Drewlabs\Core\Support\Contracts */
interface Clonable
{

    /**
     * Clone the implementations definition
     * 
     * PHP Compiler will call this method if the clone keywork is
     * called on an instance of this class. Provide implementation
     * of copy function for object properties here
     *
     * @return void
     */
    public function __clone();
}