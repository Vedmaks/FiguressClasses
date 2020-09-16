<?php

namespace Classes2d;

class Quadrate implements iParam2d
{
    protected $edge;

    public function __construct(Line $line)
    {
        $this->edge = $line->getLength();

        return $this;
    }

    public function getPerimeter(): float
    {
        return $this->edge * 4;
    }

    public function getSquare(): float
    {
        return $this->edge * $this->edge;
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
