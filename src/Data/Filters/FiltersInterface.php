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

namespace Drewlabs\Contracts\Data\Filters;

/**
 * @deprecated v0.2.x Please update code to use `drewlabs/query` implementation as this class will be removed in future release
 */
interface FiltersInterface
{
    /**
     * @param mixed $model
     *
     * @return mixed
     */
    public function apply($model);

    /**
     * Set the classs $query_criteria property to the value of the parameter.
     *
     * @return static
     */
    public function setQueryFilters(array $list);
}
