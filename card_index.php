<style>
	@import url(css/lab3.css); 
</style>

<?php
$suits = array ("spades", "hearts", "clubs", "diamonds");

$faces = array ("Two"=>2, "Three"=>3, "Four"=>4, "Five"=>5, "Six"=>6, "Seven"=>7, "Eight"=>8, "Nine"=>9, 
	"Ten"=>10, "Jack"=>11, "Queen"=>12, "King"=>13, "Ace"=>1);

$deck = array();

foreach ($suits as $suit) {
    foreach ($faces as $face => $value) {
        $deck[] = array ("face"=>$face, "suit"=>$suit, "value"=>$value);
    }
}

shuffle($deck);

?>
<html>
	<head>
	<title>Lab 3: Silverjack</title>
	</head>
	
	<body>
		<div id="wrapper">
			<h1>Silverjack!</h1>
			<?php
			$hands = array(0 => array(), 1=>array(), 2=>array(), 3=>array());
			$names = array("Godzilla", "Nemesis", "Puppy", "Ultraman");
			$totals = array();
			$total = 0;
			
			for ($k = 0; $k < 4; $k++){
				$total = 0;
				$j = rand(4,6);
				for ($i = 0; $i < $j; $i++) {
				    $card = array_pop($deck);
					$total += $card["value"];
				    $hands[$k][] = $card;
				}
				$totals[] = $total;
			}
			$max = 0;
			for($i = 0; $i < 4; $i++){
				if($totals[$i] < 43 && $totals[$i] > $max){
					$max = $totals[$i];
				}
			}
			
			echo "<table>";
			
			for ($k = 0; $k < 4; $k++){
				echo "<tr>";
				
		
				
				echo "<td>" . "<img id='people' src= img/players/" . $names[$k] . ".jpg > </td>";
		
				echo "<td>";
				for ($i = 0; $i < count($hands[$k]); $i++) {
					echo "<img src= img/cards/" . $hands[$k][$i]["suit"] . "/" . $hands[$k][$i]["value"] . ".png>";
					
				}
				
				echo "</td>";
				echo "<td>" . $totals[$k] . "</td>";
				if($totals[$k] == $max){
				
					echo "<td><div id='winner'>" . $names[$k] . " wins! </div></td>";
				}
				else{
					echo "<td> </td>";
				}
				
				echo "</tr>";
			}
			echo "</table>";
			?>
		</div>
		
		
		<hr> 
    <footer>
    &copy; Ulysses Vega, Anna Pomelov, Edwin Yantis (2016) <br/>
    <!-- Below we have an absolute path, but ideally we shouldn't use them since we don't have control of the files-->
    Disclaimer: The information in this page might not be accurate. For academic purposes only.
    
    
    
    <br> <img src= "../../Otter logo/csumb-logo.png" alt = "Otter Logo">
    </footer>
	</body>
</html>


