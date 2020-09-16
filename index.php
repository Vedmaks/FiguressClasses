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

$line2 = new Line($point1, $point3 );
$line2->echoParam('a');
echo '<hr>';

(new Line(new Point(9, 11), new Point(3, 1)))->echoParam('cd');
echo '<hr>';

$triangle1 = new Triangle($point1, $point2, $point3);
$triangle1->echoParam('abc');
echo '<hr>';

$point1->setX(8);
$point1->setY(10);
$point2->setX(5);
$point2->setY(11);
$point3->setX(6);
$point3->setY(8);

$triangle1->echoParam('new1');
echo '<hr>';

(new Triangle(new Point(12, 7), new Point(5, 17), new Point(9, 22)))->echoParam('newest');
echo '<hr>';

(new Point(5, 8))->echoParam(1);
echo '<hr>';

(new Quadrate(new Line(new Point(14, 9), new Point(7, 9))))->echoParam('pervii');
echo '<hr>';

(new Point3D(6, 7, 7))->echoParam('first');
echo '<hr>';

(new Cube(new Line(new Point(0, 0), new Point(0, 5))))->echoParam('first');
echo '<hr>';

(new Rectangle(
    new Line(new Point(0, 0), new Point(8, 0)) ,
    new Line(new Point(0, 0), new Point(0, 6))))->echoParam('no1');
echo '<hr>';
