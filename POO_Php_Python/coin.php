<?php
class Coin {

    public $results;
    public $drawCount;

    public function __construct($drawCount = 3) {

        $this->drawCount = $drawCount;
        $this->results = $this->ThrowCoin();
    }

    public function ThrowCoin() {

        $results = array();
        for ($i = 0; $i < $this->drawCount; $i++) {
            $result = rand(1,2);
            if ($result == 1) {
                $result = "pile";
            }
            else {
                $result = "face";
            }
            $results[$i] = $result;
        }
        return $results;
    }

    public function getResults() {

        return $this->results;
    }

    public function __toString() {

        return "Result: " . implode(", ", $this->results) . " ";
    }
}
?>