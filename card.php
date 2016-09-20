<?php
class Card
{
    public function __construct($v, $s)
    {
        $this->value = $v;
        $this->suit = $s;
    }
    function test() {
        echo "$this->value of $this->suit <br>";
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
    $card[$i] -> test();
}


?>