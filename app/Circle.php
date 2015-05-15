<?php

namespace app;

/**
 * Class Circle Shape
 * @package app
 */
class Circle extends Shape
{
    private $radius;

    /**
     * @param integer $radius - rarius of the circle
     * @param string $color - color
     */
    public function __construct($radius, $color)
    {
        if ($radius <= 0) {
            throw new \Exception("Can't save circle with incorrect radius");
        }

        $this->radius = (int)$radius;
        $this->color = $color;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Круг';
    }

    /**
     * @inheritdoc
     */
    public function draw()
    {
        return parent::draw() . sprintf(', радиус: %s', $this->radius);
    }

    /**
     * @inheritdoc
     */
    public function getSquare()
    {
        return pi() * pow($this->radius, 2);
    }

    /**
     * Returns the radius of the circle object
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

}