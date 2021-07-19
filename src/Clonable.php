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

namespace Drewlabs\Contracts;

interface Clonable
{
    /**
     * Clone the implementations definition.
     *
     * PHP Compiler will call this method if the clone keywork is
     * called on an instance of this class. Provide implementation
     * of copy function for object properties here
     *
     * @return void
     */
    public function __clone();
}
