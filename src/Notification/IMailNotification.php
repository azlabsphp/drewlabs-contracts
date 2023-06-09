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

interface IMailNotification extends INotification
{
    /**
     * Returns a comma sperated list of mail attached receivers.
     *
     * @return string
     */
    public function getCc();

    /**
     * Returns the mail subject.
     *
     * @return string
     */
    public function getSubject();
}
