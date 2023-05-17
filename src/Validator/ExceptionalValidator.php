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

namespace Drewlabs\Contracts\Validator;

interface ExceptionalValidator
{
    /**
     * Add an after validation callback.
     *
     * @param callable $callback
     *
     * @return CoreValidator|Validator|self
     */
    public function after($callback);
}
