<?php

$books = [
    [   
        'name' => 'The Quotable Ronald Reagan',
        'author' => 'Peter',
        'releaseYear' => 2001,
        'purchaseUrl' => 'https://example.com/the-quotable-ronald-reagan'
    ],
    [   
        'name' => 'Rooster crows for day',
        'author' => 'Burman',
        'releaseYear' => 2005,
        'purchaseUrl' => 'https://example.com/rooster-crows-for-day'
    ],
    [   
        'name' => 'Leadership Is an Art',
        'author' => 'Pree',
        'releaseYear' => 2010,
        'purchaseUrl' => 'https://example.com/leadership-is-an-art'
    ]
];

// function filter($items, $fn) {

//         $filteredItems = [];

//         foreach ($items as $item) {
//             if( $fn($item)) {
//                 $filteredItems[] = $item;
//             }
//         }

//         return $filteredItems;
// }

    $filteredBooks= array_filter($books, function($book) {
        return $book['releaseYear'] <2005;
    });


// $name = "Dark Matter";
// $read = true;
// if($read) {
//     $message = "You have read $name";
// }
// else {
//     $message = "You have not read $name";
// }


?>






require "index.view.php" ;