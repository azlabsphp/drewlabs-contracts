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

interface AbstractValidator
{
    /**
     * Validate values based on the provided rules or view model.
     *
     * @throws Drewlabs\Core\Validator\Exceptions\ValidationException
     *
     * @return self
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
     *
     * @return mixed
     */
    public function errors();
}
