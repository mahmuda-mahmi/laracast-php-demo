<?php

// problem 4

$product = [
    'Product' => 'Mechanical Keyboard',
    'Price'=> '$80',
    'Category'=> 'Electronics',
    'Stock'=> 12
];

function isAvailable($product) {
    if ($product['Stock'] > 0) {
        echo "<li> <strong>Availability: </strong> $product[Stock] items available. </li>";
    } else {
        echo "<li> <strong>Availability: </strong> Out of Stock </li>";
    }
}

require "views/problem06-view.php";