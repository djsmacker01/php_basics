<?php
 // conditional and looping statements

 $age = 20;

 if($age > 18){
    echo "You are an adult.<br>";
 }
 else{
    echo "You are not an adult.";
 }

 // if..elseif...else
 $score = 75;
   if($score >= 90){
    echo "Grade: A<br>";
   }
   elseif($score >= 75){
    echo "Grade: B<br>";
   }
   elseif($score >= 50){
    echo "Grade: C<br>";
   }
   else{
    echo "Grade: F<br>";
   }

// switch statement

$day = "Monday";

switch($day){
    case "Monday":
        echo "Start of the week!. <br>";
        break;
    case "Tuesday":
        echo "Second day of the week!.<br>";
        break;
    case " Wednesday":
        echo "Midweek day!.<br>";
        break;

    case "Thursday":
        echo "Almost the weekend!.<br>";
        break;
    case "Friday":
        echo "End of the work week!.<br>";
        break;

    case "Saturday":
        echo "It's the weekend!.<br>";
        break;
    case "Sunday":
        echo "Weekend vibes!. <br>";
        break;
}
 // Loops
 // while loop
echo "....While Loop..."."<br>";

 $count = 1;
     while($count < 5){
        echo "count (while): $count<br>";
        $count++;
     }
 echo "<br>";
// for loop
echo "....For Loop..."."<br>";
for($i = 1; $i <= 15; $i++){
    echo "count (for): $i<br>";
}   
echo "<br>";
// for each loop (arrays)
$Fruits = ["Apple", "Banana", "Cherry"];
foreach($Fruits as $fruit)
     {
        echo "Fruit: $fruit<br>";
     }
/*
Your Exercise
At the bottom of day3_conditionals.php, add:
A variable $number = 10.
Use if...else to check if it’s even or odd.
Create an array of 3 favorite movies.
Use foreach to display them one by one.

*/

$number = 10

if($number % 2 == 0){
    echo "The number is even.";
} else {
    echo "The number is odd.";
}

$movies = ["Inception", "The Matrix", "Interstellar"];
foreach($movies as $movie) {
    echo "Favorite Movie: $movie<br>";
}
?>