<?php

// problem 4

$person = [
    'name' => 'Itasha kakashi',
    'age' => 26,
    'email' => 'kakashi@kaka.com',
    'city' => 'Mongolia',
    'height' => '155cm'
];

function showPerson($person) {
    foreach ($person as $key => $value) {
        echo "<li> <strong>$key: </strong> $value </li>";
    }
}

require "views/problem05-view.php";