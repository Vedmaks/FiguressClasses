<?php

namespace Classes3d;

use Classes2d\Quadrate;

class Cube extends Quadrate implements iParam3d
{
    public function echoParam(string $name = '')
    {
        echo 'Куб ' .
            $name .
            ': <br>' .
            '(P) Периметр грани = ' .
            round($this->getPerimeter(), 2)  .
            '<br>' .
            '(S) Площадь грани = ' .
            round($this->getSquare(), 2) .
            '<br>' .
            '(S) Площадь поверхности = ' .
            round($this->getSurfaceArea(), 2) .
            '<br>' .
            '(V) Объем = ' .
            round($this->getVolume(), 2);
    }

    public function getSurfaceArea()
    {
        return $this->getSquare() * 6;
    }

    public function getVolume()
    {
        return $this->getSquare() * $this->getLine(1);
    }
}
