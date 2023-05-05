<?php

$suits = ["clubs", "diamonds", "hearts", "spades"];

$cards = ['Ace', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King'];

$randomCard = array_rand($cards);
// $cards[$randomCard];

$randomSuit = array_rand($suits);
// $suits[$randomSuit];

echo $cards[$randomCard] . " of " . $suits[$randomSuit];


