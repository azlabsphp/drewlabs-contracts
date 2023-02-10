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

namespace Drewlabs\Contracts\Validator;

use ArrayAccess;

interface ViewModel extends CoreValidatable, ArrayAccess
{
    /**
     * Merge the object inputs with some new values provided.
     *
     * @return self
     */
    public function merge(array $values = []);

    /**
     * Get a key from the user provided attributes.
     *
     * @param string $key
     *
     * @return array|mixed|null
     */
    public function get(string $key = null);

    /**
     * Checks if the view model has a given key.
     *
     * @return bool
     */
    public function has(string $key);

    /**
     * Return the list of items in the object cache.
     *
     * @param array|string|null $keys
     *
     * @return array
     */
    public function all($keys = null);
}
