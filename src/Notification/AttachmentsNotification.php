<?php

namespace Drewlabs\Contracts\Notification;

use Psr\Http\Message\StreamInterface;

interface AttachmentsNotification 
{
    /**
     * Returns a list of files attached to the notification
     * 
     * @return resource[]|array|\SplFileInfo[]|StreamInterface[]
     */
    public function getAttachments();
}