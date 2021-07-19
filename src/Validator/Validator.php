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

interface Validator extends ValidationErrorProvider
{
    /**
     * Validate provided dirty input against a set of rules and messages.
     *
     * @param Validatable|array|string $validatable
     * @param array|null               $input
     *
     * @return static
     */
    public function validate($validatable, array $input, $messages = []);

    /**
     * Model {is_update} property setter.
     *
     * @return static
     */
    public function setUpdate(bool $update);
}
