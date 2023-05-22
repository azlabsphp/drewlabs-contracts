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

interface NotificationSenderInterface
{
    /**
     * Get the name associated with the sender unique identifier.
     *
     * @return string
     */
    public function getName();

    /**
     * Returns the notification sender unique identifier.
     *
     * @return string
     */
    public function getIdentifier();
}
