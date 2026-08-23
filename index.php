<?php

// problem 1

$name = "MahmudaCast";
$age = 25;
$country = "Bangladesh";
$profession = "Web Developer";

// problem 2

$number = 55;

function isEven($number) {
    if($number%2 == 0) {
        return "$number is even";
    }
    else {
        return "$number is odd";
    }

}

// problem 3

$score = 79;

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

$business = [
    'bName' => 'MahmudaCast',
    'cost' => 155,
    'categories' => ["Testing", "PHP", "JavaScript"]
];

function register($user) {
    // Create a new user record in the database;
    // Log them in;
    // Send a welcome message;
    // Redirect them to new dashboard;
}

require "index.view.php";