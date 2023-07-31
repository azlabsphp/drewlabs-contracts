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

namespace Drewlabs\Contracts\Auth;

interface UserManager
{
    /**
     * Remove user from database by user id
     * 
     * @param string $id
     *
     * @return void
     */
    public function deleteById(string $id);

    /**
     * Update user in database by id
     *
     * @param string $id
     * @param array $values
     *
     * @return UserInterface
     */
    public function updateById(string $id, array $values);

    /**
     *  Provide functionnality for creating a user.
     *
     * @param array $values
     * @param array $params
     * @param \Closure $callback
     *
     * @return UserInterface
     */
    public function create(array $values, array $params, \Closure $callback = null);

    /**
     * Helper method for finding Application user by a remember token.
     *
     * @param mixed  $id
     * @param string $token
     *
     * @return UserInterface
     */
    public function findUserByRememberToken($id, $token);

    /**
     * Abstarct method declaration for finding an application user by credentials.
     *
     * @return UserInterface
     */
    public function findUserByCredentials(array $credentials);

    /**
     * Find application user using login name or user name.
     *
     * @return UserInterface
     */
    public function findUserByLogin(string $sub);

    /**
     * Find application user using user id.
     *
     * @param string $id
     *
     * @return UserInterface
     */
    public function findUserById($id);

    /**
     * Update the user using the remember token value.
     *
     * @return void
     */
    public function updateUserRememberToken($id, $token);
}
