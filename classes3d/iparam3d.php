<?php

namespace Classes3d;

use Classes2d\iParam2d;

interface iParam3d extends iParam2d
{
    public function getSurfaceArea();
    public function getVolume();
}