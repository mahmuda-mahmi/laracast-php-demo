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


    <ul>
        <?php foreach($filteredBooks as $book) : ?>
            <li>
                <?= $book['name'] ?>
                <br>
                <?= $book['releaseYear'] ?>
                <br>
                <?= $book['author'] ?>
            </li>
        <?php endforeach; ?>
    </ul>




    <h1>
        
        <?php echo $message; ?>
        <?= $message ?>
    </h1>

</body>
</html>
