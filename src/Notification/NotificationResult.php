<?php

namespace Drewlabs\Contracts\Notification;

use Drewlabs\Contracts\Support\ArrayableInterface;

interface NotificationResult extends ArrayableInterface
{

    /**
     * 
     * @return string|\DateTimeInterface 
     */
    public function date();

    /**
     * 
     * @return string|int 
     */
    public function id();

    /**
     * Status code indicating the notification was successful or not
     * 
     * @return int 
     */
    public function code();

    /**
     * True if the notification was successful
     * 
     * @return bool
     */
    public function ok();
}