<?php

namespace Classes2d;

class Line extends Figure2Points implements iParam
{
    public function echoParam(string $name = '')
    {
        echo 'Длина линни ' . $name . ' = ' . round($this->getLine(1));
    }
}
