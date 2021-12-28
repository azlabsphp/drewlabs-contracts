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

namespace Drewlabs\Contracts\Support\DataTransfertObject;

use Drewlabs\Contracts\Support\ArrayableInterface;

interface ObjectInterface extends \JsonSerializable
{
    /**
     * Create an instance of the current class from PHP standard object or array.
     *
     * @param \stdClass|array $value
     *
     * @return static
     */
    public function fromStdClass($value);

    /**
     * Convert the current object into a model.
     *
     * @return ArrayableInterface|mixed
     */
    public function toModel();

    /**
     * Convert the current object into an {@link ArrayableInterface} class.
     *
     * @return ArrayableInterface
     */
    public function toArrayable();

    /**
     * Build the required properties of the current object from $attributes.
     *
     * Note: If all is true, the guarded properties are updated as well if present
     *
     * @param bool $all
     *
     * @return static
     */
    public function copyWith(array $attributes, $all = false);
}
