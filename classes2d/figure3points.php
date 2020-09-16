<?php

namespace Classes2d;

class Figure3Points extends Figure2Points
{
    protected Point $point3;

    public function __construct(Point $point1, Point $point2, Point $point3)
    {
        $this->point3 = $point3;
        parent::__construct($point1, $point2);
    }

    public function setPoint3(Point $point3): void
    {
        $this->point3 = $point3;
    }

    protected function getLine($num)
    {
        $p1x = $this->point1->getX();
        $p1y = $this->point1->getY();
        $p2x = $this->point2->getX();
        $p2y = $this->point2->getY();
        $p3x = $this->point3->getX();
        $p3y = $this->point3->getY();

        if ($num == 1) {
            return sqrt(pow($p1x-$p2x,2) + pow($p1y-$p2y,2));
        }

        if ($num == 2) {
            return sqrt(pow($p1x-$p3x,2) + pow($p1y-$p3y,2));
        }

        if ($num == 3) {
            return sqrt(pow($p2x-$p3x,2) + pow($p2y-$p3y,2));
        }

        return null;
    }
}