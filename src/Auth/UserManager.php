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

namespace Drewlabs\Contracts\Auth;

interface UserManager
{

    /**
     *
     * @param array $args
     */
    public function get(...$args);

    /**
     *
     * @param int|string|array $query
     * @param bool             $batch
     *
     * @return int|mixed
     */
    public function delete($query, $batch = false);

    /**
     *  Provide functionnality for creating a user
     *
     * @param array $attributes
     * @param array $params
     * @param \Closure|null $callback
     * @return IUserModel|DoubleAuthUserInterface
     */
    public function create(array $attributes, $params = [], \Closure $callback = null);

    /**
     *  Provide functionnality for updating a user using {id}
     *
     * @param mixed $id
     * @param array $attributes
     * @param array $params
     * @param \Closure|null $callback
     * @return IUserModel|DoubleAuthUserInterface
     */
    public function update($id, array $attributes, array $params = [], \Closure $callback = null);

    /**
     * Helper method for finding Application user by a remember token
     *
     * @param mixed $id
     * @param string $token
     * @return IUserModel|DoubleAuthUserInterface
     */
    public function findUserByRememberToken($id, $token);

    /**
     * Abstarct method declaration for finding an application user by credentials
     *
     * @param array $credentials
     * @return IUserModel|DoubleAuthUserInterface
     */
    public function findUserByCredentials(array $credentials);

}