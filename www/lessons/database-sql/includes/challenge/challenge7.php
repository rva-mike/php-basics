

<!-- Multiple pages in PHP
The following page contains an array of data and some HTML. The HTML contains an unordered list with some empty list items.

Add an anchor tag (a ) to each list item element, replacing the three dots. The link should have the following characteristics:

It should link to a page called post.php.
The text of the link should be the value of the array element (e.g. "Good news"). 
The index of each array element (e.g. 1, 3, 5) should be passed to post.php using the query string, using the "id" name and the value of the index from the array. -->


<?php

$posts = [1 => 'Good news', 3 => 'Read this', 5 => 'Important announcement'];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Posts</title>
</head>

<body>

    <h1>Posts</h1>

    <ul>
        <?php foreach ($posts as $id => $title) : ?>
            <!-- <li>...</li> -->
            <li><a href="post.php?id=<?= $id ?>"><?= $title ?></a></li>

        <?php endforeach; ?>
    </ul>

</body>

</html>