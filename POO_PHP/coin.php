<?php

require_once('randomizable.php');

class Coin implements Randomizable {
    public function roll() {
        return rand(1, 2);
    }
}
?>
