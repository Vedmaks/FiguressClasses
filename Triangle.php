<?php
class Triangle
{

    private Point $point1;

    private Point $point2;

    private Point $point3;

    public function __construct(Point $point1, Point $point2, Point $point3)
    {
        $this->point1 = $point1;
        $this->point2 = $point2;
        $this->point3 = $point3;

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

    public function setPoint3(Point $point3): void
    {
        $this->point3 = $point3;
    }

    public function getTrianglePerimeter(): float
    {
        return $this->getLine(1) + $this->getLine(2) + $this->getLine(3);
    }

    public function getTriangleSquare(): float
    {
        $p = $this->getTrianglePerimeter()/2;

        return  sqrt($p * ($p - $this->getLine(1)) * ($p - $this->getLine(2)) * ($p - $this->getLine(3)));
    }

    public function echoTriangleParam(string $name = '')
    {
        echo '(P) Периметр треугольника ' .
            $name .
            ' = ' .
            $this->getTrianglePerimeter()  .
            ', (S) площадь = ' .
            $this->getTriangleSquare();
    }

    private function getLine($num)
    {
        $p1x = $this->point1->getX();
        $p1y = $this->point1->getY();
        $p2x = $this->point2->getX();
        $p2y = $this->point2->getY();
        $p3x = $this->point3->getX();
        $p3y = $this->point3->getY();

        if ($num == 1) {
            return sqrt(pow($p1x-$p3x,2) + pow($p1y-$p3y,2));
        }
        if ($num == 2) {
            return sqrt(pow($p1x-$p2x,2) + pow($p1y-$p2y,2));
        }
        if ($num == 3) {
            return sqrt(pow($p2x-$p3x,2) + pow($p2y-$p3y,2));
        }
        return null;
    }

}