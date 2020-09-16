<?php

namespace Classes3d;

use Classes2d\Point;
use Classes2d\iParam;

class Point3D extends Point implements iParam
{
    private int $z;

    public function __construct($x, $y , $z)
    {
        $this->z = $z;

        parent::__construct($x, $y);
    }

    public function getZ(): int
    {
        return $this->z;
    }

    public function setZ(int $z): void
    {
        $this->z = $z;
    }

    public function echoParam(string $name = '')
    {
        echo 'Координаты 3d точки ' .
            $name .
            ': x = ' .
            $this->getX()  .
            ', y = ' .
            $this->getY()  .
            ', z = ' .
            $this->getZ();
    }
}
