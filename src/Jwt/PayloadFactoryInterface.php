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

namespace Drewlabs\Contracts\Jwt;

use Drewlabs\Contracts\Factory\IFactory;

interface PayloadFactoryInterface extends IFactory
{
    /**
     * Returns payload claims instance.
     *
     * @return IClaims
     */
    public function getClaims();

    /**
     * Set the token ttl (in minutes).
     *
     * @return static
     */
    public function setPayloadTTL(int $ttl);

    /**
     * Set the refresh flow.
     *
     * @return $this
     */
    public function setRefreshFlow(bool $refresh_flow = true);
}
