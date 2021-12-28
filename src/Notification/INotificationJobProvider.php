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

/**
 * @deprecated v1.1.x
 */
interface INotificationJobProvider
{
    /**
     * Bind/Set the notification object to the job provider.
     *
     * @return static
     */
    public function setNotificationObject(INotification $mail);
}
