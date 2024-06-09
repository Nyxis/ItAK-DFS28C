<?php

require_once 'dice.php';
require_once 'coin.php';
require_once 'cardDeck.php';
require_once 'randomResult.php';

class GameMaster {
    private $dice;
    private $coin;
    private $deck1;
    private $deck2;

    public function __construct() {
        $this->dice = new Dice(6);
        $this->coin = new Coin();
        $this->deck1 = new CardDeck(3, 18);
        $this->deck2 = new CardDeck(4, 13);
    }

    public function pleaseGiveMeACrit() {
        $random = rand(1, 100);
        if ($random <= 40) {
            return RandomResult::SUCCESS;
        } elseif ($random <= 55) {
            return RandomResult::CRIT_SUCCESS;
        } elseif ($random <= 95) {
            return RandomResult::FAILURE;
        } else {
            return RandomResult::FUMBLE;
        }
    }
}

// Création du GameMaster et utilisation
$gameMaster = new GameMaster();
$result = $gameMaster->pleaseGiveMeACrit();
echo "Résultat: $result";
?>
