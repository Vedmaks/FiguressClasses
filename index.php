<?php

class Point
{
    private $x;
    private $y;


    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function setX(int $x): void
    {
        $this->x = $x;
    }

    public function setY(int $y): void
    {
        $this->y = $y;
    }

}

class Line
{
    /** @var Point */
    private $point1;

    /** @var Point */
    private $point2;


    public function setPoint1(Point $point1): void
    {
        $this->point1 = $point1;
    }

    public function setPoint2(Point $point2): void
    {
        $this->point2 = $point2;
    }

    /**
     * @return mixed
     */
    public function getLength(): float
    {
        $powX = pow($this->point2->getX() - $this->point1->getX(), 2);
        $powY = pow($this->point2->getY() - $this->point1->getY(), 2);

        return sqrt($powX + $powY);
    }

    public function getHeight(): float
    {
        $a = $this->point1->getY();
        $b = $this->point2->getY();

        if ($a >= $b) {
            return $a;
        }

        return $b;
    }
}


$point1 = new Point();
$point1->setX(1);
$point1->setY(1);

$point2 = new Point();
$point2->setX(5);
$point2->setY(1);

$point3 = new Point();
$point3->setX(5);
$point3->setY(8);

$line1 = new Line();
$line1->setPoint1($point1);
$line1->setPoint2($point2);

$line2 = new Line();
$line2->setPoint1($point1);
$line2->setPoint2($point3);

/*
echo 'Длина линни 1 = ' . $line1->getLength()  . ' Высота линии = ' . $line1->getHeight();
echo '<br>';
echo 'Длина линни 2 = ' . $line2->getLength()  . ' Высота линии = ' . $line2->getHeight();
echo '<br>';

$point1->setX(2);
$point1->setY(2);

echo 'Длина линни 1 = ' . $line1->getLength() . ' Высота линии = ' . $line1->getHeight();
echo '<br>';
echo 'Длина линни 2 = ' . $line2->getLength() . ' Высота линии = ' . $line2->getHeight();
echo '<br>';

$point1->setX(5);
$point1->setY(4);

echo 'Длина линни 1 = ' . $line1->getLength() . ' Высота линии = ' . $line1->getHeight();
echo '<br>';
echo 'Длина линни 2 = ' . $line2->getLength() . ' Высота линии = ' . $line2->getHeight();
echo '<br>';
*/

class Triangle
{
    /** @var Point */
    private $point1;

    /** @var Point */
    private $point2;

    /** @var Point */
    private $point3;

    public function __construct(Point $point1, Point $point2, Point $point3)
    {
        $this->point1 = $point1;
        $this->point2 = $point2;
        $this->point3 = $point3;
    }

    /*

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
    */

    /**
     * @return Point
     */
    public function getTrianglePerimeter(): float
    {
        $p1x = $this->point1->getX();
        $p1y = $this->point1->getY();
        $p2x = $this->point2->getX();
        $p2y = $this->point2->getY();
        $p3x = $this->point3->getX();
        $p3y = $this->point3->getY();

        $l1_3 = sqrt(pow($p1x-$p3x,2) + pow($p1y-$p3y,2));
        $l1_2 = sqrt(pow($p1x-$p2x,2) + pow($p1y-$p2y,2));
        $l2_3 = sqrt(pow($p2x-$p3x,2) + pow($p2y-$p3y,2));

        $P = $l1_2 + $l1_3 + $l2_3;

        return $P;
    }

    public function getTriangleSquare(): float
    {
        $p1x = $this->point1->getX();
        $p1y = $this->point1->getY();
        $p2x = $this->point2->getX();
        $p2y = $this->point2->getY();
        $p3x = $this->point3->getX();
        $p3y = $this->point3->getY();

        $l1_3 = sqrt(pow($p1x-$p3x,2) + pow($p1y-$p3y,2));
        $l1_2 = sqrt(pow($p1x-$p2x,2) + pow($p1y-$p2y,2));
        $l2_3 = sqrt(pow($p2x-$p3x,2) + pow($p2y-$p3y,2));

        $P = $l1_2 + $l1_3 + $l2_3;
        $p = $P/2;

        $S = sqrt($p * ($p - $l1_2) * ($p - $l1_3) * ($p - $l2_3));

        return $S;
    }


}

/*
$triangle1 = new Triangle();
$triangle1->setPoint1($point1);
$triangle1->setPoint2($point2);
$triangle1->setPoint3($point3);
*/

$triangle1 = new Triangle($point1, $point2, $point3);
echo 'Периметр треугольника 1 = ' . $triangle1->getTrianglePerimeter();
echo '<br>';
echo 'Площадь треугольника 1 = ' . $triangle1->getTriangleSquare();
echo '<hr>';

$point1->setX(8);
$point1->setY(10);
$point2->setX(5);
$point2->setY(11);
$point3->setX(6);
$point3->setY(8);

echo 'Периметр треугольника 2 = ' . $triangle1->getTrianglePerimeter();
echo '<br>';
echo 'Площадь треугольника 2 = ' . $triangle1->getTriangleSquare();
echo '<hr>';

$point1->setY(7);
$point2->setX(16);
$point2->setY(7);
$point3->setX(12);
$point3->setY(1);

echo 'Периметр треугольника 3 = ' . $triangle1->getTrianglePerimeter();
echo '<br>';
echo 'Площадь треугольника 3 = ' . $triangle1->getTriangleSquare();
