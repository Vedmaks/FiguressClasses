<?php

namespace Classes2d;

class Quadrate extends Figure2Points implements iParam2d
{
    public function getPerimeter(): float
    {
        return $this->getLine(1) * 4;
    }

    public function getSquare(): float
    {
        return $this->getLine(1) * $this->getLine(1);
    }

    public function echoParam(string $name = '')
    {
        echo 'Квадрат ' .
            $name .
            ': <br>' .
            '(P) Периметр = ' .
            round($this->getPerimeter(), 2)  .
            '<br>' .
            '(S) Площадь = ' .
            round($this->getSquare(), 2);
    }
}
