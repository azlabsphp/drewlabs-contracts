<?php

namespace Drewlabs\Contracts\Support;

interface NamedFuncArgument extends FuncArgument
{
    /**
     * Returns the name of the function argument
     * 
     * @return null|string 
     */
    public function getName(): ?string;

}