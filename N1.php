<?php
echo "Hello World";
echo "<br>";
echo "<br>";

//calculate and display the area of rectangle
$length= 5;
$width = 6;
$area= $length * $width;
echo "The area of rectangle is {$area}";

echo"<br>";
echo"<br>";

//swap the value of two variables without using a temporary variable
$a = 10;
$b = 20;
echo "Before swapping: a = {$a}, b = {$b}<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "After swapping: a={$a}, b={$b}<br>";

echo"<br>";

