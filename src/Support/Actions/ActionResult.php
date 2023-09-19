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

namespace Drewlabs\Contracts\Support\Actions;

/**
 * @psalm-template T
 * @template T
 */
interface ActionResult
{
    /**
     * Retuns the value holds in the action result.
     *
     * @return T
     * @psalm-return T
     */
    public function value();

    /**
     * Checks if action result value is defined (a.k.a internal value is not null)
     * 
     * @return bool 
     */
    public function hasValue(): bool;

    /**
     * PHP magic method indirecting calls on the action result to it wrapped instance.
     *
     * @param mixed $name
     * @param mixed $arguments
     *
     * @throws \Error
     * @throws \BadMethodCallException
     *
     * @return mixed
     */
    public function __call($name, $arguments);
}
