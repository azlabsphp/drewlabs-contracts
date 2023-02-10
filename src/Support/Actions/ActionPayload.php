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

namespace Drewlabs\Contracts\Support\Actions;

use Drewlabs\Contracts\Support\ArrayableInterface;

interface ActionPayload extends ArrayableInterface
{
    /**
     * Returns the value wrapped by the payload object.
     *
     * @return mixed
     */
    public function value();

    /**
     * Returns the payload as an array object.
     *
     * @return array
     */
    public function all();
}
