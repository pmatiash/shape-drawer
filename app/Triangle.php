<?php
namespace app;

/**
 * Class Triangle Shape
 * @package app
 */
class Triangle extends Shape
{
    private $sideA;
    private $sideB;
    private $sideC;

    /**
     * @param int $sideA
     * @param int $sideB
     * @param int $sideC
     * @param string $color
     */
    public function __construct($sideA, $sideB, $sideC, $color)
    {
        if (!$this->isCorrectTriangle($sideA, $sideB, $sideC)) {
            throw new \Exception("Triangle with these parameters can't be exists");
        }

        $this->sideA = (int) $sideA;
        $this->sideB = (int) $sideB;
        $this->sideC = (int) $sideC;
        $this->color = $color;
    }

    /**
     * Check sides for main triangle rule
     * @param $sideA
     * @param $sideB
     * @param $sideC
     * @return bool
     */
    private function isCorrectTriangle($sideA, $sideB, $sideC) {

        $sum = $sideA + $sideB + $sideC;

        if ($sum - $sideA < $sideA) {
            return false;
        }

        if ($sum - $sideB < $sideB) {
            return false;
        }

        if ($sum - $sideC < $sideC) {
            return false;
        }

        return true;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Треугольник';
    }

    /**
     * @inheritdoc
     */
    public function draw()
    {
        return parent::draw() . sprintf(', сторона a: %s, сторона b: %s, сторона c: %s', $this->sideA, $this->sideB, $this->sideC);
    }

    /**
     * @inheritdoc
     */
    public function getSquare()
    {
        $p = ($this->sideA + $this->sideB + $this->sideC) / 2;

        return sqrt($p * ($p - $this->sideA) * ($p - $this->sideB) * ($p - $this->sideC));
    }

}