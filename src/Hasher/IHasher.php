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

namespace Drewlabs\Contracts\Hasher;

interface IHasher
{
    /**
     * Generate a hash value from a given string.
     *
     * @param string $value
     *
     * @return string
     */
    public function make($value, array $options = []);

    /**
     * Check if computed hash match a given value.
     *
     * @param string $value
     * @param string $hashed_value
     */
    public function check($value, $hashed_value, array $options = []): bool;

    /**
     * Check if the given hash value has been hashed with given options.
     *
     * @param string $hashed_value
     * @param array  $options
     */
    public function needsRehash($hashed_value, $options): bool;
}
