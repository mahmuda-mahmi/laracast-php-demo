<?php

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

require "problem02.view.php";