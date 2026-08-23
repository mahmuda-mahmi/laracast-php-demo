<?php

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

require "problem03.view.php";