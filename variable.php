<?php
// Day 2: Variables, Data Types & Operators

// 1. Variables
$name = "Nurudeen";
$age = 30;
$height = 1.80; // in meters
$is_student = false;

echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Height: $height meters <br>";
echo "Student: " . ($is_student ? "Yes" : "No") . "<br><br>";

// 2. Data Types (var_dump shows type + value)
var_dump($name); echo "<br>";
var_dump($age); echo "<br>";
var_dump($height); echo "<br>";
var_dump($is_student); echo "<br><br>";

// 3. Operators
$a = 10;
$b = 3;

echo "a + b = " . ($a + $b) . "<br>";
echo "a - b = " . ($a - $b) . "<br>";
echo "a * b = " . ($a * $b) . "<br>";
echo "a / b = " . ($a / $b) . "<br>";
echo "a % b = " . ($a % $b) . "<br>";
echo "a ** b = " . ($a ** $b) . " (exponent)<br><br>";

// 4. Comparison
echo "Is a == b ? "; var_dump($a == $b); echo "<br>";
echo "Is a > b ? "; var_dump($a > $b); echo "<br>";
echo "Is a < b ? "; var_dump($a < $b); echo "<br>";
echo "Is a != b ? "; var_dump($a != $b); echo "<br><br>";

// 5. Logical Operators
$logged_in = true;
$admin = false;

echo "Logged in AND Admin? "; var_dump($logged_in && $admin); echo "<br>";
echo "Logged in OR Admin? "; var_dump($logged_in || $admin); echo "<br>" .'<br><br>';

// Exercise: Favorite food + favorite number
$fav_food = 'dodo';
$fav_num = 3;

echo "My favourite food is  $fav_food.<br>";
echo "My favourite number is $fav_num.<br>";

// Multipy by 2
 $double = $fav_num * 2;

 echo "My favorite number times 2 is $double. <br>";

?>
