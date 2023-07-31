<?php

declare(strict_types=1);

/*
 * This file is part of the drewlabs namespace.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Contracts\Support;

/**
 * Defines a type that reference methods with optional parameters.
 */
interface OverloadedPartialMethodHandler extends OverloadedMethodHandler
{
    /**
     * Return the list of optional arguments declared by the callable.
     *
     * @return string[]|FuncArgument[]|NamedFuncArgument[]
     */
    public function getOptionalArguments();

    /**
     * Return the list of required arguments declared by the callable.
     *
     * @return string[]|FuncArgument[]|NamedFuncArgument[]
     */
    public function getRequiredArguments();
}
