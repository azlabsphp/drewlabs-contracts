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

interface INotification
{
    /**
     * Return the string identifier of the notification sender.
     *
     * @return string
     */
    public function getSender();

    /**
     * Returns the notification identifier of the notification receiver.
     *
     * @return string|mixed
     */
    public function getReceiver();

    /**
     * Returns the notification content.
     *
     * @return string
     */
    public function getContent();
}
