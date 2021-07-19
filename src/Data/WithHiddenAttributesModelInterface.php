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

namespace Drewlabs\Contracts\Data;

interface WithHiddenAttributesModelInterface
{
    /**
     * Returns the list of guarded attribute of an object or ORM Model.
     *
     * @return array
     */
    public function getHidden();

    /**
     * Set the attached model hidden property.
     *
     * @return static
     */
    public function setHidden(array $attributes);
}
