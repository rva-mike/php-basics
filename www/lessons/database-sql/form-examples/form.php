<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forms</title>
</head>

<body>

    <form method="post">

        <label for="name"> Name <input id="name" name="name" type="text"><br></label>
        <label for="description"> Description <textarea name="description" id="description" cols="30" rows="10"></textarea><br></label>
        <label for="size"> Size <select name="size" id="size"><br>
                <option value="one">One</option>
                <option value="two">Two</option>
                <option value="three">Three</option>
            </select></label>

    </form>


</body>

</html>