<?php

namespace app;

/**
 * Class TriangleFactory
 * @package app
 */
class TriangleFactory extends ShapeFactory
{
    /**
     * @return Triangle|mixed
     */
    public function generateRandomShape()
    {
        $sideA = rand(1,100);
        $sideB = rand(1,100);

        // sum of two sides must be greater then third side
        $difference = $sideA > $sideB ? $sideA - $sideB : $sideB - $sideA;
        $sideC = rand($difference, $sideA + $sideB - 1);

        return new Triangle($sideA, $sideB, $sideC, $this->getRandomColor());
    }

}