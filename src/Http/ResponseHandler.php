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

interface ResponseHandler
{
    /**
     * Controllers Http response formatter
     * 
     * @param mixed $data
     * @param int $response_code
     * @param array $headers
     * @return Response|mixed
     */
    public function respond($data, $status, $headers = []);

    /**
     * Return an HTTP JSON response with status >=200 AND <=204
     *
     * @param mixed $data
     * @param array|null $errors
     * @param bool $success
     * @return Response|mixed
     */
    public function ok($data, array $errors = null, $success = true);

    /**
     * Return a Server Error HTTP response  with status 500
     *
     * @param \Exception $e
     * @param array|null $errors
     * @return Response|mixed
     */
    public function error(\Exception $e, array $errors = null);

    /**
     * Return an HTTP Bad Request response  with status >=400 or <=403
     *
     * @param array $errors
     * @return Response|mixed
     */
    public function badRequest(array $errors);

    /**
     * Add status code to the HTTP response
     *
     * @param integer $code
     * @return static
     */
    public function withStatus(int $code);    
    
    /**
    * Add headers to the HTTP response
    *
    * @param array $headers
    * @return static
    */
   public function withHeaders(array $headers);
}
