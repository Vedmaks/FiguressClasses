<?php

namespace Classes2d;

class Line implements iParam
{
    private Point $point1;

    private Point $point2;

    public function __construct(Point $point1, Point $point2)
    {
        $this->point1 = $point1;
        $this->point2 = $point2;

        return $this;
    }

    public function setPoint1(Point $point1): void
    {
        $this->point1 = $point1;
    }

    public function setPoint2(Point $point2): void
    {
        $this->point2 = $point2;
    }

    public function getLength(): float
    {
        $powX = pow($this->point2->getX() - $this->point1->getX(), 2);
        $powY = pow($this->point2->getY() - $this->point1->getY(), 2);

        return round(sqrt($powX + $powY), 2);
    }

    /*
    public function getHeight(): float
    {
        $a = $this->point1->getY();
        $b = $this->point2->getY();

        if ($a >= $b) {
            return $a;
        }

        return $b;
    }
    */

    public function echoParam(string $name = '')
    {
        echo 'Длина линни ' . $name . ' = ' . $this->getLength();
    }
}
