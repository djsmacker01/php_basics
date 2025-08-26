<?php
 $age = 32;

 if($age < 18){
    echo "You are a minor.";
 } 
 elseif($age >= 18 && $age < 65)
    {
    echo "You are an adult.<br>";
   
 }
else{
    echo "You are a senior.";
}

//for loop
for($i = 1; $i < 13; $i++){
    echo " 5 * $i = " . (5 * $i) . "<br>";
}

//create an array of 5 fruit
$Fav_fruits = array("Mango", "Banana", "Orange", "Apple", "Pineapple");
 foreach($Fav_fruits as $fruit){
    if($fruit == "Mango"){
        echo "Mango is my favorite fruit!<br>";
    }
 }
?>