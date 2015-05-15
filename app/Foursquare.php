<?php

namespace app;

/**
 * Class Foursquare Shape
 * @package app
 */
class Foursquare extends Shape
{
    private $side;

    /**
     * @param int $side
     * @param string $color
     */
    public function __construct($side, $color)
    {
        if ((int)$side <= 0) {
            throw new \Exception("Foursquare with these parameters can't be exists");
        }

        $this->side = (int) $side;
        $this->color = $color;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Квадрат';
    }

    /**
     * @inheritdoc
     */
    public function draw()
    {
        return parent::draw() . sprintf(', длинна стороны: %s', $this->side);
    }

    /**
     * @inheritdoc
     */
    public function getSquare()
    {
        return $this->side * $this->side;
    }

}