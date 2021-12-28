<?php

declare(strict_types=1);

/*
 * This file is part of the Drewlabs package.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Contracts\Support;

interface GenericInterface
{
    /**
     * Bind a given type into the instance of this class.
     * Implementation classes must provides a validation mechanism against
     * the supported type.
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
     * @return mixed
     */
    public function bind(string $type);
}
