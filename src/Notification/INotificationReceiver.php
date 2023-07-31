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
interface INotificationReceiver
{
    /**
     * Get the unique identifier of the notification receiver.
     *
     * @return mixed
     */
    public function getReceiver();

    /**
     * Returns the attached receivers of the current notification.
     *
     * @return string|array|null
     */
    public function getAttachedReceivers();

    /**
     * Return the content being send through the notification service.
     *
     * @return string|mixed
     */
    public function getContent();

    /**
     * Return the notification subject.
     *
     * @return string
     */
    public function getSubject();
}
