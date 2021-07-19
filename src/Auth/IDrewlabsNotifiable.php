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

interface IDrewlabsNotifiable
{
    /**
     * Fetch list of channels associated with this instance that can be use for notifications.
     *
     * @return array
     */
    public function getChannels();

    // Define other notification methods here
}
