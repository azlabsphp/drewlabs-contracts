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

use Drewlabs\Contracts\Data\Filters\FiltersInterface;

/**
 * Interface FiltersHandlerInterface.
 */
interface FiltersHandlerInterface
{
    /**
     * @param bool $status
     *
     * @return static
     */
    public function skipFilters($status = true);

    /**
     * @return mixed
     */
    public function getFilters();

    /**
     * @return static
     */
    public function getByFilter(FiltersInterface $filter);

    /**
     * @return static
     */
    public function pushFilter(FiltersInterface $filter);

    /**
     * @return static
     */
    public function applyFilter();
}
