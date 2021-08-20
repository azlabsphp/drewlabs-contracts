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

use Drewlabs\Contracts\Support\DataTransfertObject\ListBridgeInterface;
use Drewlabs\Contracts\Support\DataTransfertObject\ObjectBridgeInterface;
use Drewlabs\Contracts\Support\GenericInterface;

/**
 * @deprecated 1.0  Will be remove in next major release (2.0)
 * 
 * Uses <Drewlabs\Contracts\Support\DataTransfertObject\ListBridgeInterface> and <Drewlabs\Contracts\Support\DataTransfertObject\ObjectBridgeInterface> instead
 * @package Drewlabs\Contracts\EntityObject
 */
interface IDtoService extends ObjectBridgeInterface, ListBridgeInterface, GenericInterface
{
    /**
     * Bind [[IDtoObject]] class string to the current service.
     *
     * @return static
     */
    public function bindClass($dtoClassName);

}
