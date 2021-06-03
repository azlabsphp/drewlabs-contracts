<?php

namespace Drewlabs\Contracts\Data\Parser;

interface QueryParser
{
    /**
     * Parse the provided parameters to the query param inputs
     *
     * @param array $params
     * @return array
     */
    public function parse(array $params);
}
