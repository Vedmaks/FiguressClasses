<?php

namespace Classes2d;

class Rectangle implements iParam2d
{
    protected $line1;
    protected $line2;

    public function __construct(Line $line1, Line $line2)
    {
        $this->line1 = $line1->getLength();
        $this->line2 = $line2->getLength();

        return $this;
    }

    public function getPerimeter(): float
    {
        return ($this->line1 + $this->line2) * 2;
    }

    public function getSquare(): float
    {
        return $this->line1 * $this->line2;
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
