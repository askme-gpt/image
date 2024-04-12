<?php

declare(strict_types=1);

namespace Intervention\Image\Analyzers;

use Intervention\Image\Drivers\SpecializableAnalyzer;

class PixelColorAnalyzer extends SpecializableAnalyzer
{
    public int $x;
    public int $y;
    public int $frame_key;

    public function __construct(int $x, int $y, int $frame_key = 0)
    {
        $this->x = $x;
        $this->y = $y;
        $this->frame_key = $frame_key;
    }
}

