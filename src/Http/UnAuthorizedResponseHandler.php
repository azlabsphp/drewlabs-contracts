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

namespace Drewlabs\Contracts\Http;

use Psr\Http\Message\ResponseInterface as Response;

interface UnAuthorizedResponseHandler
{
    /**
     * Convert an authorization exception into a response.
     *
     * @param Request $request
     *
     * @return Response|mixed
     */
    public function unauthorized($request, ?\Exception $exception = null);
}
