<?php
class CardDeck {

    public $resultCard;
    public $resultColor;
    public $nb_colors;
    public $nb_values;

    public function __construct($nb_colors = 4, $nb_values = 13) {
        $this->nb_colors = $nb_colors;
        $this->nb_values = $nb_values;
        $this->resultCard = $this->PickCard();
        $this->resultColor = $this->PickColor();
    }

    public function PickCard() {

        $cards = array();
        for ($i = 0; $i < $this->nb_values; $i++) {
            switch ($i) {
                case  $this->nb_values - 4:
                    $card = "valet";
                    break;
                case $this->nb_values - 3:
                    $card = "dame";
                    break;
                case $this->nb_values - 2:
                    $card = "roi";
                    break;
                case $this->nb_values - 1:
                    $card = "as";
                    break;
                default:
                    $card = $i + 2;
                    break;
            }
            $cards[$i] = $card;
        }
        shuffle($cards);
        $resultCard = $cards[0];
        return $resultCard;
    }

    public function PickColor() {
    
        $colors = array();
        for ($j = 0; $j < $this->nb_colors; $j++) {
            switch ($j) {
                case  0:
                    $color = "coeur";
                    break;
                case 1:
                    $color = "pique";
                    break;
                case 2:
                    $color = "carreau";
                    break;
                case 3:
                    $color = "trefle";
                    break;
            }
            $colors[$j] = $color;
        }
        shuffle($colors);
        $resultColor = $colors[0];
        return $resultColor;
    }

    public function getResult() {

        return $this->result;
    }

    public function __toString() {

        return "Result: " . $this->resultCard . " de " . $this->resultColor . " ";
    }
}
?>