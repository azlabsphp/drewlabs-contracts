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

namespace Drewlabs\Contracts\Data\Model;

interface HidesAttributes
{
    /**
     * Get properties that should not be included during model serialization.
     *
     * @return array
     */
    public function getHidden();

    /**
     * Defines properties that should not be included during model serialization.
     *
     * @return static
     */
    public function setHidden(array $attributes);
}
