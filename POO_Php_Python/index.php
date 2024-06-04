<?php
include "jdr/cardDeck.php";
include "jdr/coin.php";
include "jdr/dice.php";
include "jdr/randomResult.php";

// Exo 3 et 4
$dice = new Dice();
echo $dice;

$coinflip = new Coin();
echo $coinflip;

$pickCard = new CardDeck();
echo $pickCard;

?>