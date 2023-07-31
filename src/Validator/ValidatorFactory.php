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

namespace Drewlabs\Contracts\Validator;

interface ValidatorFactory
{
    /**
     * Create a validator instance.
     *
     * @param array ...$args
     *
     * @return AbstractValidator|Validator
     */
    public function make(...$args);
}
