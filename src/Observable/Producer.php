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

namespace Drewlabs\Contracts\Observable;

interface Producer extends \SplSubject
{
    /**
     * Produce new value.
     *
     * @param mixed|null $data
     *
     * @return void
     */
    public function next($data = null);
}
