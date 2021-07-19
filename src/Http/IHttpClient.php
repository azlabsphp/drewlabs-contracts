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

interface IHttpClient
{
    /**
     * Send a Http /GET request.
     *
     * @param string $url
     * @param array  $data
     * @param array  $headers
     *
     * @return mixed
     */
    public function get($url, $data = [], $headers = []);

    /**
     * Send a Http /POST request.
     *
     * @param string $url
     * @param array  $data
     * @param array  $headers
     *
     * @return mixed
     */
    public function post($url, $data = [], $headers = []);

    /**
     * Send a Http /PUT request.
     *
     * @param string $url
     * @param array  $data
     * @param array  $headers
     *
     * @return mixed
     */
    public function put($url, $data = [], $headers = []);

    /**
     * Send a Http /DELETE request.
     *
     * @param string $url
     * @param array  $data
     * @param array  $headers
     *
     * @return mixed
     */
    public function delete($url, $data = [], $headers = []);

    /**
     * Set request cookies if any.
     *
     * @return static
     */
    public function setCookies(array $cookies = []);
}
