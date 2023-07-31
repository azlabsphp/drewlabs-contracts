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

interface ResponseHandler
{
    /**
     * Controllers Http response formatter.
     *
     * @param mixed $data
     * @param int   $status
     *
     * @return mixed
     */
    public function respond($data, $status, array $headers = []);

    /**
     * Return an HTTP JSON response with status >=200 AND <=204.
     *
     * @param mixed $data
     * @param array $errors
     *
     * @return mixed
     */
    public function ok($data, array $errors = null, bool $success = true);

    /**
     * Return a Server Error HTTP response  with status 500.
     *
     * @return mixed
     */
    public function error(\Throwable $e, array $errors = null);

    /**
     * Return an HTTP Bad Request response  with status >=400 or <=403.
     *
     * @param array|mixed $data
     *
     * @return mixed
     */
    public function badRequest($data, int $status = 422);

    /**
     * Add status code to the HTTP response.
     *
     * @return self
     */
    public function withStatus(int $code);

    /**
     * Add headers to the HTTP response.
     *
     * @return self
     */
    public function withHeaders(array $headers);
}
