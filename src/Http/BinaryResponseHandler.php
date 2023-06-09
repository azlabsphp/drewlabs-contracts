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

use Closure;

interface BinaryResponseHandler
{
    /**
     * Returns a binary response download.
     *
     * @param string $path
     * @param string $name
     * @param array  $headers
     *
     * @return mixed
     */
    public function download(string $path, string $name = null, array $headers = [], $deleteAfterSend = false);

    /**
     * Return a stream output.
     * 
     * @param string $name 
     * @param Closure $callback 
     * @return mixed 
     */
    public function stream(string $name, \Closure $callback);
}
