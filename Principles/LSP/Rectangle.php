<?php

namespace SOLID\LSP;

class Rectangle
{
    /**
     * @var int
     */
    protected int $width;
    /**
     * @var int
     */
    protected int $height;

    /**
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * Calculate the area of rectangle
     * @return int
     */
    public function calculateArea(): int
    {
        return $this->getWidth() * $this->getHeight();
    }

}