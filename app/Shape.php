<?php

namespace app;

/**
 * Abstract Class Shape
 * @package app
 */
abstract class Shape implements ShapeInterface
{
    protected $color;

    /**
     * @inheritdoc
     */
    public function draw()
    {
        return sprintf('Фигура: %s, площадь:%d кв.ед., цвет: %s', $this->getName(), $this->getSquare(), $this->getColor());
    }

    /**
     * @inheritdoc
     */
    public function getColor()
    {
        return $this->color;
    }

}