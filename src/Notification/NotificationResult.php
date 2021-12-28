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

use Drewlabs\Contracts\Support\ArrayableInterface;

interface NotificationResult extends ArrayableInterface
{
    /**
     * @return string|\DateTimeInterface
     */
    public function date();

    /**
     * @return string|int
     */
    public function id();

    /**
     * Status code indicating the notification was successful or not.
     *
     * @return int
     */
    public function code();

    /**
     * True if the notification was successful.
     *
     * @return bool
     */
    public function ok();
}
