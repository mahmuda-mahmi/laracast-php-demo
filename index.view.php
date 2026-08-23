<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- problem 1 -->
    <h2>My name is <?= $name ?></h2>
    <h3>I am <?= $age ?> years old</h3>
    <p>I live in <?= $country ?></p>
    <p>I work as a <?= $profession ?></p>

    <!-- problem 2 -->

    <h2><?= isEven($number); ?></h2>

    <!-- problem 3 -->
     <h2>Grade is <?= findGrade($score) ?></h2>

    <h1><?= $business['bName'] ?></h1>

    <ul>
        <?php foreach($business['categories'] as $category) : ?>
            <li><?= $category ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
