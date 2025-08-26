<?php
// Create an associative array of students and scores
$students_scores = array(
    "Alice" => 85,
    "Bob" => 78,
    "Charlie" => 92,
    "David" => 88,
    "Eva" => 95
);

//Loop through each student
foreach($students_scores as $student => $score){
    echo "The score of $student is $score<br>";
}

// checking for performance
if($score >= 90){
    echo "Excellent";
}
elseif($score < 50){
    echo "Poor";
}
echo "<br>";
?>