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

namespace Drewlabs\Contracts\Http;

interface ViewResponseHandler
{
    /**
     * Returns a http response a view.
     *
     * @return mixed|string
     */
    public function view(string $path, array $data = []);
}
