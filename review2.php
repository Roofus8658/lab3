<<<<<<< HEAD
<?php

function displayRandomCard() {
    
   $deck = array();
    for($i = 1; $i <=52; $i++){
      
      $deck[] = $i;  
    }
    
   
    shuffle($deck);
    print_r($deck);
    
    $card = array_pop($deck);
    echo $card. "<br />";
    $suits = array("clubs", "diamonds", "hearts", "spades");
    $randomSuitIndex = rand(0,3);
    $randomSuit = $suits[$randomSuitIndex];
    echo "<img src='img/cards/$suits[$randomSuitIndex]/" . rand(1,13). ".png' />";
    //echo "<img src='img/cards/$randomSuit/" . rand(1,13). ".png' />";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?=displayRandomCard() ?>
        
        
       
=======
<!DOCTYPE html>
<html>
    <head>
        <title>Silverjack!</title>
    </head>
    <body>
    <?php
    $card=rand(1,13);
    $s = rand(0,3);
    $suits=array("clubs", "diamonds", "hearts", "spades");
    $deck = array();
    echo "<img src = \"img/cards/clubs/1.png\">";
    ?>
    
>>>>>>> 528db370842b17e86b28fae18bbbc796a7e8a860
    </body>
</html>