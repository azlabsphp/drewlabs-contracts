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
