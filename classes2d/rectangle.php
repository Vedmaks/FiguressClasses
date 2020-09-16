<?php

namespace Classes2d;

class Rectangle extends Figure3Points implements iParam2d
{
    public function getPerimeter(): float
    {
        return ($this->getLine(1) + $this->getLine(2)) * 2;
    }

    public function getSquare(): float
    {
        return $this->getLine(1) * $this->getLine(2);
    }

    public function echoParam(string $name = '')
    {
        echo 'Прямоугольник ' .
            $name .
            ': <br>' .
            '(P) Периметр = ' .
            round($this->getPerimeter(), 2)  .
            '<br>' .
            '(S) Площадь = ' .
            round($this->getSquare(), 2);
    }
}
