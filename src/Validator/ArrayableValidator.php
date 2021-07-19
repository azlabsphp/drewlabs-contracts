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

interface ArrayableValidator extends ValidationErrorProvider
{
    /**
     * Provides validation functionnalities for array inputs.
     *
     * @return static|mixed
     */
    public function validate(array $values, array $rules, array $messages = []);
}
