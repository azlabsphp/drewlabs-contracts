<?php

declare(strict_types=1);

/*
 * This file is part of the drewlabs namespace.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Contracts\Notification;

/**
 * @deprecated v0.2.x
 */
interface INotification
{
    /**
     * Unique identifier of the notification instance.
     *
     * @return int|string
     */
    public function id();

    /**
     * Returns details of the sender object.
     *
     * @return string|Addressable
     */
    public function getSender();

    /**
     * Returns the notification identifier of the notification receiver.
     *
     * @return string|Addressable
     */
    public function getReceiver();

    /**
     * Returns the notification content.
     *
     * @return string
     */
    public function getContent();
}
