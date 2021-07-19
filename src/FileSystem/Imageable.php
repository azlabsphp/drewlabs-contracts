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

namespace Drewlabs\Contracts\FileSystem;

interface Imageable
{
    /**
     * Resize an image based on provided width and height.
     *
     * @param int $width
     * @param int $height
     *
     * @return mixed
     */
    public function resize(?string $file_path, ?int $width = null, ?int $height = null);

    /**
     * Crop an image based on provided width and height.
     *
     * @param int $width
     * @param int $height
     *
     * @return mixed
     */
    public function crop(?string $file_path, ?int $width = null, ?int $height = null, bool $same_size = false);
}
