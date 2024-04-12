<?php

declare(strict_types=1);

namespace Intervention\Image\Analyzers;

use Intervention\Image\Drivers\SpecializableAnalyzer;

class PixelColorsAnalyzer extends SpecializableAnalyzer
{
    public int $x;
    public int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

