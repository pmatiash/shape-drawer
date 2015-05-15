<?php

namespace app;

/**
 * Class Trapezoid Shape
 * @package app
 */
class Trapezoid extends Shape
{
    private $sideTop;
    private $sideBottom;
    private $height;

    /**
     * @param int $sideTop
     * @param int $sideBottom
     * @param int $height
     * @param string $color
     */
    public function __construct($sideTop, $sideBottom, $height, $color)
    {
        if (!$this->isCorrectTrapezoid($sideTop, $sideBottom, $height)) {
            throw new \Exception("Trapezoid with these parameters can't be exists");
        }

        $this->sideTop = (int) $sideTop;
        $this->sideBottom = (int) $sideBottom;
        $this->height = (int) $height;
        $this->color = $color;
    }

    /**
     * @param $sideTop
     * @param $sideBottom
     * @param $height
     * @return bool
     */
    private function isCorrectTrapezoid($sideTop, $sideBottom, $height) {

        if ($sideTop <= 0 ) {
            return false;
        }

        if ($sideBottom <= 0) {
            return false;
        }

        if ($height <= 0) {
            return false;
        }

        return true;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Трапеция';
    }

    /**
     * @inheritdoc
     */
    public function draw()
    {
        return parent::draw() . sprintf(', верхняя сторона: %s, нижняя сторона: %s, высота: %s', $this->sideTop, $this->sideBottom, $this->height);
    }

    /**
     * @inheritdoc
     */
    public function getSquare()
    {
        return ($this->sideTop + $this->sideBottom) / 2 * $this->height;
    }

}