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

interface Validatable
{
    /**
     * Build a dictionary of validation rules.
     *
     * @return array
     */
    public function rules();

    /**
     * Build a dictionary of validation rules to apply when updating the view model.
     *
     * @return array
     */
    public function updateRules();

    /**
     * Build a dictionary of validation errors messages.
     *
     * @return array
     */
    public function messages();
}
