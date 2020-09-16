<?php

spl_autoload_register();

use Classes2d\Point;
use Classes2d\Line;
use Classes2d\Triangle;
use Classes2d\Quadrate;
use Classes3d\Point3D;
use Classes3d\Cube;
use Classes2d\Rectangle;

$point1 = new Point(1, 1);
$point2 = new Point(5, 1);
$point3 = new Point(5, 8);

$line1 = new Line($point1, $point2);
$line1->echoParam(1);
echo '<hr>';

(new Line(new Point(9, 11), new Point(3, 1)))->echoParam('cd');
echo '<hr>';

(new Triangle(new Point(12, 7), new Point(5, 17), new Point(9, 22)))->echoParam('newest');
echo '<hr>';

(new Point(5, 8))->echoParam(1);
echo '<hr>';

(new Quadrate(new Point(14, 9), new Point(7, 9)))->echoParam('test');
echo '<hr>';

(new Point3D(6, 7, 7))->echoParam('first');
echo '<hr>';

(new Quadrate(new Point(1, 1), new Point(1, 6)))->echoParam('test');
echo '<hr>';

(new Cube(new Point(1, 1), new Point(1, 6)))->echoParam('first');
echo '<hr>';

(new Rectangle(new Point(0, 0), new Point(8, 0), new Point(0, 6)))->echoParam('no1');
echo '<hr>';

$cube = new Cube(new Point(0, 0), new Point(0, 3));
$cube->setPoint2(new Point(0, 6));
$cube->echoParam('testnew');
