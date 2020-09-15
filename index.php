<?php

require_once 'Point.php';
require_once 'Line.php';
require_once 'Triangle.php';

$point1 = new Point(1, 1);
$point2 = new Point(5, 1);
$point3 = new Point(5, 8);

$line1 = new Line($point1, $point2);
$line1->echoLineParam(1);
echo '<hr>';

$line2 = new Line($point1, $point3 );
$line2->echoLineParam('a');
echo '<hr>';

(new Line(new Point(9, 11), new Point(3, 1)))->echoLineParam('cd');
echo '<hr>';

$triangle1 = new Triangle($point1, $point2, $point3);
$triangle1->echoTriangleParam('abc');
echo '<hr>';

$point1->setX(8);
$point1->setY(10);
$point2->setX(5);
$point2->setY(11);
$point3->setX(6);
$point3->setY(8);

$triangle1->echoTriangleParam('new1');
echo '<hr>';

(new Triangle(new Point(12, 7), new Point(5, 17), new Point(9, 22)))->echoTriangleParam('newest');
