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

interface UnAuthorizedResponseHandler
{
    /**
     * Convert an authorization exception into a response.
     *
     * @param mixed $request
     *
     * @return mixed
     */
    public function unauthorized($request, \Throwable $exception = null);
}
