<?php

namespace Drewlabs\Contracts\Support;

interface GenericInterface
{

    /**
     * Bind a given type into the instance of this class.
     * Implementation classes must provides a validation mechanism against
     * the supported type
     * 
     * ## Usage
     * 
     * ```php
     *  // ... Generic type definition
     * 
     * public function __construct($param)
     * {
     *      if(!$this->validate($param)) { throw new \InvalidArgumentException}
     * }
     * 
     * private function validate($variable)
     * {
     *     return $variable instanceof $this->type_;
     * }
     * ```
     * 
     * @param string $type 
     * @return mixed 
     */
    public function bind(string $type);
}