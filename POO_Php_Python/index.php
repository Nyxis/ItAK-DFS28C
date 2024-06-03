<?php

// Exo 1 et 2
class RandomResult {

    public $result;
    public $min_nb;
    public $max_nb;

    public function __construct($minValue = 1, $maxValue = 100) {

        $this->minValue = $minValue;
        $this->maxValue = $maxValue;
        $this->result = $this->generateRandomResult();
    }

    public function generateRandomResult() {

        $result = rand($this->minValue, $this->maxValue);
        return $result;
    }

    public function getResult() {

        return $this->result;
    }

    public function __toString() {

        return "Result: " . $this->result;
    }
}

$result = new RandomResult();
echo $result;

// Exo 3
class Dice {

    public $nb_face;
    public $result;

    public function __construct($nb_face = 6) {
        $this->nb_face = $nb_face;
        $this->result = $this->generateRandomResult();
    }

    public function generateRandomResult() {
        $result = rand(1, $this->nb_face);
        return $result;
    }

    public function getResult() {

        return $this->result;
    }

    public function __toString() {

        return "Result: " . $this->result;
    }
}

class Coin {
    private $results;
    private $drawCount;
    private $pile;
    private $face;

    public function __construct($drawCount = 3, $pile = 1, $face = 2) {
        $this->drawCount = $drawCount;
        $this->pile = $pile;
        $this->face = $face;
        $this->results = [];
    }

    public function ThrowCoin() {
        for ($i = 0; $i < $this->drawCount; $i++) {
            $result = rand($this->pile, $this->face);
            $this->results[] = ['result' => $result];
        }
    }

    public function getResults() {
        return $this->results;
    }

    public function __toString() {
        $output = "";
        foreach ($this->results as $index => $draw) {
            $output .= "Draw " . ($index + 1) . ": " . $draw['result'] ."\n";
        }
        return $output;
    }
}

?>