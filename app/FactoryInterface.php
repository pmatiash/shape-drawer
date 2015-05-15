<?php

namespace app;

interface FactoryInterface
{
    /**
     * Returns shape current type but with random parameters
     * @return mixed
     */
    public function generateRandomShape();
}