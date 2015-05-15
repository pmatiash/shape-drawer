<?php

namespace app;

/**
 * Class ShapeFactory
 * @package app
 */
abstract class ShapeFactory implements FactoryInterface
{
    private $colors = [
        'red',
        'white',
        'yellow',
        'black',
        'blue',
        'purple',
        'grey',
        'green'
    ];

    /**
     * Returns random color string
     * @return mixed
     */
    public function getRandomColor()
    {
        return $this->colors[array_rand($this->colors)];
    }

}