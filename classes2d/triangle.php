<?php

namespace Classes2d;

class Triangle extends Figure3Points implements iParam2d
{
    public function getPerimeter(): float
    {
        return $this->getLine(1) + $this->getLine(2) + $this->getLine(3);
    }

    public function getSquare(): float
    {
        $p = $this->getPerimeter()/2;

        return  sqrt($p * ($p - $this->getLine(1)) * ($p - $this->getLine(2)) * ($p - $this->getLine(3)));
    }

    public function echoParam(string $name = '')
    {
        echo 'Треугольник ' .
            $name .
            ': <br>' .
            '(P) Периметр = ' .
            round($this->getPerimeter(), 2)  .
            '<br>' .
            '(S) Площадь = ' .
            round($this->getSquare(), 2);
    }
}
