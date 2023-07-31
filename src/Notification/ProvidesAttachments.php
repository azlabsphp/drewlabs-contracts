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

use Psr\Http\Message\StreamInterface;

/**
 * @deprecated v0.2.x
 */
interface ProvidesAttachments
{
    /**
     * Returns a list of files attached to the notification.
     *
     * @return resource[]|array|\SplFileInfo[]|StreamInterface[]
     */
    public function getAttachments();

    /**
     * Defines the list of attachments.
     *
     * @param resource[]|array|\SplFileInfo[]|StreamInterface[] $attachments
     *
     * @return mixed
     */
    public function setAttachments($attachments = []);
}
