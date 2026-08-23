<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        body {
            display: grid;
            height: 100vh;
            place-items: center;
            font-family: sans-serif;
            background-color: #eed8d8;
            margin: 0;
        }
    </style> -->
</head>
<body>


   <h1> Recommended Books</h1>

    <?php
    $books = [
            [   
                'name' => 'The Quotable Ronald Reagan',
                'author' => 'By Reagan, Ronald and Hannaford, Peter',
                'releaseYear' => 2001,
                'purchaseUrl' => 'https://example.com/the-quotable-ronald-reagan'
            ],
            [   
                'name' => 'Rooster crows for day',
                'author' => 'By Burman, Ben Lucien',
                'releaseYear' => 2005,
                'purchaseUrl' => 'https://example.com/rooster-crows-for-day'
            ],
            [   
                'name' => 'Leadership Is an Art',
                'author' => 'By De Pree, Max',
                'releaseYear' => 2010,
                'purchaseUrl' => 'https://example.com/leadership-is-an-art'
            ]
        ];

        function filterByAuthor($books, $author) {
            $filteredBooks = [];
            foreach ($books as $book) {
                if( $book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }
    ?>

    

    <ul>
        <?php foreach(filterByAuthor($books, 'By De Pree, Max') as $book) : ?>
            <li>
                <?= $book['name'] ?>
                <br>
                <?= $book['releaseYear'] ?>
                <br>
                <?= $book['author'] ?>
            </li>
        <?php endforeach; ?>
    </ul>



<!-- 
    <?php
    $name = "Dark Matter";
    $read = true;
    if($read) {
        $message = "You have read $name";
    }
    else {
        $message = "You have not read $name";
    }
    ?>
    <h1>
        <?php echo $message; ?>
        <?= $message ?>
    </h1> -->

</body>
 