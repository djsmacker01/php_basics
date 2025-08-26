<?php

function greet($name){
    echo" Hello, $name!<br>";
}
 greet("Nurudeen");
 greet("Nura");
 greet("John");

echo"<br>";

echo"Function with return<br>";
 // Function with return

function add($a, $b){
    return $a + $b;

 }

 echo "The sum of 5 and 10 is:" . add(5, 10). "<br>";

 function guest_greet($name="Guest"){
     echo "Welcome, $name!<br>";
 }

 guest_greet();
 guest_greet("Alice");
echo"<br>";
$name = "Nurudeen";
 function showName(){
    global $name;
     echo "Name: $name<br>";
 }

 showName();


 $counter = 0;

 function increaseCounter(){
    global $counter;
    $counter++;
    echo "Counter: $counter<br>";
 }
    increaseCounter();
    increaseCounter();
    increaseCounter();

?>