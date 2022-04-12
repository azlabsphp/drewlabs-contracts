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

namespace Drewlabs\Contracts\Data;

/**
 * @deprecated 2.4.x Unused interface
 */
interface MultiValidationRulesHandlerInterface
{
    /**
     * [[multiple]] attribute setter.
     *
     * @param bool $value
     *
     * @return static
     */
    public function setApplyMultipleValidationRules($value);

    /**
     * [[multiple]] attribute getter.
     *
     * @return void
     */
    public function getApplyMultipleValidationRulesAttributes();

    /**
     * Reset the conditional scope defintions to their initial values.
     *
     * @return static
     */
    public function resetConditionnalAttributes();
}
