<?php

namespace app;

/**
 * Class CircleFactory
 * @package app
 */
class CircleFactory extends ShapeFactory
{
    /**
     * @return Circle|mixed
     */
    public function generateRandomShape()
    {
        return new Circle(rand(1,100), $this->getRandomColor());
    }

}