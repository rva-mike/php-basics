<?php
$hour = 12;
$fruit = ['apple', 'banana', 'orange', 'mango'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>HTML Control Structures</h1>

    <?php if ($hour < 12) : ?>
        good morning
    <?php elseif ($hour < 18) : ?>
        good afternoon
    <?php elseif ($hour < 22) : ?>
        good evening
    <?php else : ?>
        good night
    <?php endif; ?>

    <ol>
        <?php foreach ($fruit as $oneFruit) : ?>

            <li><?= $oneFruit; ?></li>

        <?php endforeach; ?>
    </ol>




</body>

</html>