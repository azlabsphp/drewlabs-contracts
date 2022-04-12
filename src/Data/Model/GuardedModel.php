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

namespace Drewlabs\Contracts\Data\Model;

interface GuardedModel
{
    /**
     * Returns the list of guarded attribute of an object or ORM Model.
     *
     * @deprecated v2.2.x call / use {self::getGuarded()} method instead
     *
     * Method is subject to be removed in version 3.x
     *
     * @return array
     */
    public function getGuardedAttributes();

    /**
     * Get the guarded attributes for the model.
     *
     * @return array
     */
    public function getGuarded();

    /**
     * Set the guarded attributes for the model.
     *
     * @return self
     */
    public function guard(array $guarded);

    /**
     * Determine if the given key is guarded.
     *
     * @param string $key
     *
     * @return bool
     */
    public function isGuarded($key);
}
