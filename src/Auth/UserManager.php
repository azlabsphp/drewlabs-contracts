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
     * @param array $args
     */
    public function get(...$args);

    /**
     * @param mixed $args
     *
     * @return int|mixed
     */
    public function delete(...$args);

    /**
     *  Provide functionnality for creating a user.
     *
     * @param mixed $args
     *
     * @return UserInterface
     */
    public function create(...$args);

    /**
     *  Provide functionnality for updating a user using {id}.
     *
     * @param mixed $args
     *
     * @return UserInterface
     */
    public function update(...$args);

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
