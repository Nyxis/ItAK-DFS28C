<?php

require_once('randomizable.php');

class Dice implements Randomizable {
    private $faces;

    public function __construct($faces) {
        $this->faces = $faces;
    }

    public function roll() {
        $result = rand(1, $this->faces);
        return $result;
    }
}
?>
