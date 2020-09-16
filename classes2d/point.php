<?php

namespace Classes2d;

class Point implements iParam
{
    private int $x;
    private int $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;

        return $this;
    }

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

    public function echoParam(string $name = '')
    {
        echo 'Координаты точки ' . $name . ': x = ' . $this->getX()  . ', y = ' . $this->getY();
    }
}
