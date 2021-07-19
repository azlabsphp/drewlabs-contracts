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

namespace Drewlabs\Contracts\EntityObject;

use Drewlabs\Contracts\Data\Model\Model;

interface IDtoObject extends \JsonSerializable
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
     * Convert the current form dto object into a form model.
     *
     * @return Model|mixed
     */
    public function toModel();

    /**
     * Build the required properties of the current object from params.
     *
     * @param bool $loadAll
     *
     * @return static
     */
    public function copyWith(array $attributes, $loadAll = false);
}
