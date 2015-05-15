<?php

namespace app;

/**
 * Class TrapezoidFactory
 * @package app
 */
class TrapezoidFactory extends ShapeFactory
{
    /**
     * @return Trapezoid|mixed
     */
    public function generateRandomShape()
    {
        $sideTop = rand(1,100);
        $sideBottom = rand(1,100);
        $height = rand(1,100);

        return new Trapezoid($sideTop, $sideBottom, $height, $this->getRandomColor());
    }

}