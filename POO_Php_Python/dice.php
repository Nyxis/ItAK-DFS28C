<?php
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

        return "Result: " . $this->result . " ";
    }
}
?>