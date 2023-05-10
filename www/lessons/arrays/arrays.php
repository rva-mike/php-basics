<?php

$manualArray = [1 => "First post", 3 => "another post", "read this!"];

$associativeArray = ["first" => "first post", "second" => "another post", "third" => "read this!"];

var_dump($manualArray[1]);
var_dump($associativeArray["second"]);

//better format
$associativeArray = [
    "first" => "first post",
    "second" => "another post",
    "third" => "read this!"
];
echo "<br>";

//Multidimensional arrays

$value = [
    "message" => "Hello world!",
    "count" => 150,
    "pi" => 3.14,
    "status" => false,
    "result" => null
];
echo "<br>";
var_dump($value);
echo "<br>";


$people = [
    [
        "name" => "Alice",
        "email" => "alice@example.com",
        "height" => 1.80
    ],
    [
        "name" => "bob",
        "email" => "bob@example.com",
        "height" => 1.80
    ],
    [
        "name" => "carol",
        "email" => "carol@example.com",
        "height" => 1.80
    ]
];

$alice_email = $people[0]["email"];
echo "<br>";
echo $alice_email;
echo "<br><br>";

//foreach loop

$articles = ["first post", "second post", "third post"];

foreach ($articles as $article) {
    echo $article . ", ";
}
echo "<br><br>";

//foreach index

$articles1 = ["first post", "second post", "third post"];

foreach ($articles1 as $index => $article) {
    echo $index . " - " . $article . ", ";
}

echo "<br><br>";

//foreach index manual assign

$forEachManualAssign = [
    'a' => "first post",
    'b' => "second post",
    'c' => "third post",
];

foreach ($forEachManualAssign as $index => $article) {
    echo $index . ' - ' . $article, ", ";
}

