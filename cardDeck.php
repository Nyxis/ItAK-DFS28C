<?php

require_once('randomizable.php');

class CardDeck implements Randomizable {
    private $colors;
    private $values;

    public function __construct($colors, $values) {
        $this->colors = $colors;
        $this->values = $values;
    }

    public function roll() {
        $color = rand(1, count($this->colors));
        $value = rand(1, count($this->values));
        return "Color: $color, Value: $value";
    }
}
?>
