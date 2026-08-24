<?php

// problem 4

$students = [
    ["name" => "Alice", "grade" => 85],
    ["name" => "Bob", "grade" => 62],
    ["name" => "Charlie", "grade" => 45],
];

function findGrade($score) {
    if($score > 100 || $score < 0) {
        return "Invalid score";
    }
    elseif( $score >=80 && $score <=100) {
        return "A";
    }
    elseif( $score >=70 && $score <=79) {
        return "B";
    }
    elseif( $score >=60 && $score <=69) {
        return "C";
    }
    elseif( $score >=50 && $score <=59) {
        return "D";
    }
    else {
        return "F";
    }
}

function showGrades($students) {
    foreach ($students as $student) {
        $grade = findGrade($student['grade']);
        echo "<li>{$student['name']}: $grade</li>";
    }
}

require "views/problem13-view.php";