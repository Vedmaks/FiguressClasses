<?php

namespace Classes2d;

class Figure2Points
{
    protected Point $point1;

    protected Point $point2;

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

    protected function getLine($num)
    {
        $p1x = $this->point1->getX();
        $p1y = $this->point1->getY();
        $p2x = $this->point2->getX();
        $p2y = $this->point2->getY();

        if ($num == 1) {
            return sqrt(pow($p1x-$p2x,2) + pow($p1y-$p2y,2));
        }

        return null;
    }
}
