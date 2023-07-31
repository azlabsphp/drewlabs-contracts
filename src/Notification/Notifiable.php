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
interface Notifiable
{
    /**
     * Returns the content|notification receiver unique identifier. It can be either an email address, a phonenumber, or device unique identifier.
     *
     * @return INotificationReceiver[]
     */
    public function getReceivers();

    /**
     * Returns the identifier of the notification being sent.
     *
     * @return INotificationSender
     */
    public function getSender();

    /**
     * Add a new receiver to the list of receivers.
     *
     * @return static
     */
    public function pushReceiver(INotificationReceiver $receiver);

    /**
     * Set the details of the notification sender.
     *
     * @return static
     */
    public function setSender(INotificationSender $sender);
}
