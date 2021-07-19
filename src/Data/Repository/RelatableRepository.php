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

namespace Drewlabs\Contracts\Data\Repository;

interface RelatableRepository
{
    /**
     * Set identifier for querying relation or not.
     *
     * @return static
     */
    public function queryRelation(bool $value = true);

    /**
     * load the current model along with the specified related/relationships.
     *
     * @param string|array $relations
     *
     * @return static
     */
    public function loadWith($relations);
}
