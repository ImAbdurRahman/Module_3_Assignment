<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $averageGrade = array_sum($grades) / count($grades);
        echo "Average grade for $student: $averageGrade\n";
    }
}

$studentGrades = array(
    "Student1" => array("Math" => 70, "English" => 78, "Science" => 92),
    "Student2" => array("Math" => 75, "English" => 83, "Science" => 94),
    "Student3" => array("Math" => 78, "English" => 85, "Science" => 80)
);

calculateAverageGrades($studentGrades);
?>
