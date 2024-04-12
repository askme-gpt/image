<?php

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Intervention\Image\Exceptions\RuntimeException;

interface DecoderInterface
{
    /**
     * Decode given input either to color or image
     *
     * @param $input
     * @throws RuntimeException
     * @return ImageInterface|ColorInterface
     */
    public function decode($input): ImageInterface|ColorInterface;
}
