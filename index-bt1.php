<?php 

include_once "bai-tap1/Circle.php";
include_once "bai-tap1/Cylinder.php";

echo ('<h1> bài tập 1 </h1>');
echo '<br>';


$circle = new Circle($color = 'red', $radius = 5);
echo ('<h1>hinh tron</h1>');
echo  $circle. '<br>';
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
$cylinder = new Cylinder($color ='blue', $radius = 7, $height = 10);
echo ('<h1>hinh tru</h1>');
echo  $cylinder. '<br>';
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'the tich: ' . $cylinder->calculateVolume();
?>