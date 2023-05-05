<?php


if (isset($_POST['submit'])) {

    $text = $_POST['text'];

    $badWords = ["badword1", "badword2"];

    foreach ($badWords as $badWord) {
        $text = str_replace("$badWord", "****", $text);
    }
    echo $text;
}
