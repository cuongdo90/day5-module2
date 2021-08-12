<?php
include_once "thuc-hanh1/Cylinder.php";
include_once "thuc-hanh1/Square.php";
include_once "thuc-hanh1/Circle.php";
include_once "thuc-hanh1/Rectangle.php";
include_once "thuc-hanh1/Shape.php";

echo '<h1>thuc hanh</h1>';
$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Square 01', 4, 4, 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';

?>
<?php

echo ('<h1> bài tập 1 </h1>');
echo '<br>';
include_once "bai-tap1/Circle.php";
include_once "bai-tap1/Cylinder.php";

$circle = new Circle($color = 'red', $radius = 5);
echo $circle->__toString();
echo '<br>';
echo 'Circle area: ' . $circle->calculateArea() . '<br />';

?>