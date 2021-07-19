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

namespace Drewlabs\Contracts\Notification;

interface INotificationServer
{
    /**
     * Returns the client unique credential for connecting to notification servers.
     *
     * @return string
     */
    public function getClientUniqueIdentifier();

    /**
     * Returns client secret string.
     *
     * @return string
     */
    public function getClientSecret();

    /**
     * Returns ip/url of the notification server.
     *
     * @return string|array|null
     */
    public function getServerHost();

    /**
     * Returns notification server web service port.
     *
     * @return int
     */
    public function getServerPort();
}
