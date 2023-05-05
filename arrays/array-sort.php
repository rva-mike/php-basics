<?php

$names = ["Ben", "Sam", "Amy", "John"];

sort($names);
// rsort($names);

echo "<ul>";

foreach ($names as $name) {
    echo "<li>$name</li>";
}

echo "</ul>";
