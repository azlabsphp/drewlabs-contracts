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

namespace Drewlabs\Contracts\Auth;

interface NotificationChannelsAware
{
    /**
     * Fetch list of channels associated with this instance that can be use for notifications.
     *
     * @return array|string[]
     */
    public function getChannels();

    /**
     * Adds a phone text message notification channel to an authenticatable instance.
     *
     * @param string $sub
     *
     * @return self
     */
    public function addTextMessageChannel($sub, bool $is_verified = false, bool $default = false);

    /**
     * Adds a mail notification channel to an authenticatable instance.
     *
     * @param string $sub
     *
     * @return self
     */
    public function addMailChannel($sub, bool $is_verified = false, bool $default = false);

    /**
     * Add a notification channel to an authenticatable instance.
     *
     * @param string $sub
     *
     * @return self
     */
    public function addChannel($sub, string $channel, bool $is_verified = false, bool $default = false);
}
