<?php
class Card
{
    public function __construct($v, $s)
    {
        $this->value = ($v + 1);
        $this->suit = $s;
    }
    function test() {
        echo "$this->value of $this->suit <br>";
    }
    function getSuit() {
        return $this->suit;
    }
    function getValue() {
        return $this->value;
    }
    function showCard() {
        echo "<img src=\"img/cards/$this->suit/$this->value.png\"><br>";
    }
}

$suits = array("clubs", "diamonds", "hearts", "spades");
$card = array();

for($i = 0; $i < 4; $i++) {
    for($j = 0; $j < 13; $j++) {
        array_push($card, new Card($j, $suits[$i]));
    }
        
}

shuffle($card);
for($i = 0; $i < 52; $i++) {
    $card[$i] -> showCard();
}


?>