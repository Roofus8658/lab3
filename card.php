<?php
class Card
{
    public function __construct($v)
    {
        $this->value = $v; 
    }
    function test() {
        echo "$value <br>";
    }
}

$card = array();
for($i = 0; $i < 52; $i++) {
    $card[$i] = new Card($i);
}
shuffle($card);

?>