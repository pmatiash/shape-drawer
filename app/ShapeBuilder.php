<?php

namespace app;

/**
 * Class ShapeBuilder
 * @package app
 */
class ShapeBuilder
{
    /**
     * Returns random shape factory
     * @return mixed
     */
    public function getRandomFactory()
    {
        $factories = [
            new CircleFactory(),
            new TriangleFactory(),
            new FoursquareFactory(),
            new TrapezoidFactory()
        ];

        return $factories[array_rand($factories)];
    }

}