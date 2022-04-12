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

namespace Drewlabs\Contracts\Data\Model;

interface Parseable
{
    /**
     * Returns the fillable properties of the given model.
     *
     * @deprecated v2.2.x uses {self::getFillable()} instead
     *
     * @return array
     */
    public function getFillables();

    /**
     * Get the fillable attributes for the model.
     *
     * @return array
     */
    public function getFillable();

    /**
     * Set the fillable attributes for the model.
     *
     * @return $this
     */
    public function fillable(array $fillable);
}
