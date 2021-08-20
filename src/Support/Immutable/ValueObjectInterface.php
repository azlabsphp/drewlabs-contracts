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

namespace Drewlabs\Contracts\Support\Immutable;

interface ValueObjectInterface extends \JsonSerializable, \ArrayAccess
{
    /**
     * Get list of properties with their corresponding values.
     *
     * @return array
     */
    public function attributesToArray();

    /**
     * Convert the object to an array.
     *
     * @return array
     */
    public function toArray();

    /**
     * Create an instance of @see {{ValueObjectInterface}} from a standard PHP Class.
     *
     * @param \stdClass $value
     *
     * @return static
     */
    public function fromStdClass($value);

    /**
     * Creates a copy of the @see {{ValueObjectInterface}} class modifying the properties with the user
     * provided attribute array.
     *
     * @param bool $set_guarded
     *
     * @return static
     */
    public function copyWith(array $attr, $set_guarded = false);
}
