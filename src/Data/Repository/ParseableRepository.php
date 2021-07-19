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

namespace Drewlabs\Contracts\Data\Repository;

use Drewlabs\Contracts\Data\Parser\ModelAttributeParser;

interface ParseableRepository
{
    /**
     * Create mappable model service class.
     *
     * @return ModelAttributeParser
     */
    public function modelAttributesParser();

    /**
     * Bind the model attribute parser to the the model respository.
     *
     * @return static
     */
    public function bindAttributesParser(ModelAttributeParser $parser);
}
