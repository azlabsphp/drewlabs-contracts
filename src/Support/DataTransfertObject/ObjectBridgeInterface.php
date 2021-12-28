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

interface ObjectBridgeInterface
{
    /**
     * Generate an instance of ObjectInterface.
     *
     * @param ArrayableInterface|\stdClass|array $model
     * @param bool                               $all
     *
     * @return ObjectInterface
     */
    public function toObject($model, $all = false);

    /**
     * Generate a {ArrayableInterface} from a {ObjectInterface} instance.
     *
     * @return ArrayableInterface
     */
    public function objectToModel($obj);

    /**
     * Bind the output type/object/interface to the bridge class.
     *
     * @param string $name
     *
     * @return self
     */
    public function bindClass($name);
}
