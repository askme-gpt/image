<?php

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

interface DrawableInterface
{
    /**
     * Position of the drawable object
     *
     * @return PointInterface
     */
    public function position(): PointInterface;

    /**
     * Set the background color of the drawable object
     *
     * @param $color
     * @return DrawableInterface
     */
    public function setBackgroundColor($color): self;

    /**
     * Return background color of drawable object
     *
     * @return mixed
     */
    public function backgroundColor();

    /**
     * Determine if a background color was set
     *
     * @return bool
     */
    public function hasBackgroundColor(): bool;

    /**
     * Set border color & size of the drawable object
     *
     * @param $color
     * @param int $size
     * @return DrawableInterface
     */
    public function setBorder($color, int $size = 1): self;

    /**
     * Set border size of the drawable object
     *
     * @param int $size
     * @return DrawableInterface
     */
    public function setBorderSize(int $size): self;

    /**
     * Set border color of the drawable object
     *
     * @param $color
     * @return DrawableInterface
     */
    public function setBorderColor($color): self;

    /**
     * Get border size
     *
     * @return int
     */
    public function borderSize(): int;

    /**
     * Get border color of drawable object
     *
     * @return mixed
     */
    public function borderColor();

    /**
     * Determine if the drawable object has a border
     *
     * @return bool
     */
    public function hasBorder(): bool;
}
