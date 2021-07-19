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

/**
 * @method self validate(array $values, array $rules, ?array $messages = [], ?\Closure $callback = null)
 * @method self validate(string $validatable, array $values, ?\Closure $callback = null)
 * @method self validate(\Drewlabs\Contracts\Validator\CoreValidatable $validatable, array $values, ?\Closure $callback = null)
 */
interface Validator extends CoreValidator
{
    /**
     * Set model rules loader control value.
     *
     * @return static
     */
    public function setUpdate(bool $value);
}
