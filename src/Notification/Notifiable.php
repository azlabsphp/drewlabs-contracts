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

interface Notifiable
{
    /**
     * Returns the content|notification receiver unique identifier. It can be either an email address, a phonenumber, or device unique identifier.
     *
     * @return INotificationReceiver[]
     */
    public function getNotificationReceivers();

    /**
     * Returns the identifier of the notification being sent.
     *
     * @return INotificationSender
     */
    public function getNotificationSender();

    /**
     * Return the notification server configuration object.
     *
     * @return INotificationServer
     */
    public function notificationServerConfigs();

    /**
     * Add a new receiver to the list of receivers.
     *
     * @return static
     */
    public function pushNotificationReceiver(INotificationReceiver $receiver);

    /**
     * Set the details of the notification sender.
     *
     * @return static
     */
    public function setNotificationSender(INotificationSender $sender);
}
