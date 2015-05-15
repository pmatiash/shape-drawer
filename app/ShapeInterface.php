<?php

namespace app;

interface ShapeInterface
{
    /**
     * Draw the shape
     * @return mixed
     */
    public function draw();

    /**
     * Returns the square of the shape
     * @return mixed
     */
    public function getSquare();

    /**
     * Return the color of the shape
     * @return mixed
     */
    public function getColor();

    /**
     * Returns the name of the shape
     * @return mixed
     */
    public function getName();

}