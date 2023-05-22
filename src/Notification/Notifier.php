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

interface Notifier
{
    /**
     * Handle notification sending process.
     *
     * @return mixed
     */
    public function notify();

    /**
     * Set the notification object on the current notifier instance.
     *
     * @param Notifiable $value
     *
     * @return static
     */
    public function setNotification($value);

    /**
     * Rerturns the noitification object of the current notifier instance.
     *
     * @return Notifiable
     */
    public function getNotifiable();
}
