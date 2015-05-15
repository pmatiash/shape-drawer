<?php

namespace app;

/**
 * Class FoursquareFactory
 * @package app
 */
class FoursquareFactory extends ShapeFactory
{
    /**
     * @return Foursquare|mixed
     */
    public function generateRandomShape()
    {
        return new Foursquare(rand(1,100), $this->getRandomColor());
    }

}