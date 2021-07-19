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

namespace Drewlabs\Contracts\EntityObject;

interface QueryResultDtoInterface extends IDtoService
{
    /**
     * Apply callable transformation algorithm to parameter.
     *
     * @param array|DataProviderQueryResultInterface|mixed $values
     * @param callable|\Closure                            $callback
     *
     * @return mixed
     */
    public function mapTo($values, callable $callback);
}
