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

namespace Drewlabs\Contracts\Auth;

interface NotificationChannelsAware extends Notifiable
{
    /**
     * Adds a phone text message notification channel to an authenticatable instance 
     * @param string $identifier 
     * @param bool $is_verified 
     * @param bool $default 
     * @return self 
     */
    public function addTextMessageChannel($identifier, bool $is_verified = false, bool $default = false);

    /**
     * Adds a mail notification channel to an authenticatable instance 
     * @param string $identifier 
     * @param bool $is_verified 
     * @param bool $default
     * @return self 
     */
    public function addMailChannel($identifier, bool $is_verified = false, bool $default = false);

    /**
     * Add a notification channel to an authenticatable instance
     * 
     * @param string $identifier 
     * @param string $channel 
     * @param bool $is_verified 
     * @param bool $default
     * @return self 
     */
    public function addChannel($identifier, string $channel, bool $is_verified = false, bool $default = false);
}
