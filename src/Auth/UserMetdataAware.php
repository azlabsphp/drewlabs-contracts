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

interface UserMetdataAware
{
    /**
     * returns the main email attribute value.
     */
    public function getEmail(): ?string;

    /**
     * returns emails attribute value.
     *
     * @return string|null
     */
    public function getEmails(): array;

    /**
     * returns user `phone number` attribute value.
     */
    public function getPhoneNumber(): ?string;

    /**
     * returns user `address` attribute value.
     */
    public function getAddress(): ?string;

    /**
     * returns user `profile url` attribute value.
     */
    public function getProfileUrl(): ?string;

    /**
     * returns `name` attribute value.
     */
    public function getName(): ?string;
}
