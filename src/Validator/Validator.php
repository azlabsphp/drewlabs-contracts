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
 * @method self validate(string $blueprint, array $values, ?\Closure $callback = null)
 * @method self validate(\Drewlabs\Contracts\Validator\CoreValidatable $instance, array $values, ?\Closure $callback = null)
 * @method self validate(\Drewlabs\Contracts\Validator\ViewModel $view, ?\Closure $callback = null)
 */
interface Validator extends CoreValidator
{
    /**
     * Tells the validator to load rules defines on updateRules() method.
     *
     * @return static
     */
    public function updating();
}
