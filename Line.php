<?php
class Line
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

    public function echoLineParam(string $name = '')
    {
        echo 'Длина линни ' . $name . ' = ' . $this->getLength()  . ', высшая точка = ' . $this->getHeight();
    }

}
