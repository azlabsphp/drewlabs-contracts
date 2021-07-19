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

interface CoreValidator
{
    /**
     * Validate values based on the provided rules or view model.
     *
     * @return static
     */
    public function validate(...$args);

    /**
     * Return a boolean value that indicate whether
     * validation was successful or fails.
     *
     * @return bool
     */
    public function fails();

    /**
     * Return the list of errors that occurs during validation.
     */
    public function errors(): mixed;
}
