 <?php
        
        function indexedArrays (){
            
        
        $prices = array(500, 300, 600);
        print_r($prices); /* displays content of the array*/
        
        array_push($prices, 100);
        $prices [] = 200; 
        echo "<br/>"; 
        print_r($prices);
        unset($prices[1]);
        echo "<br />";
        print_r($prices);
        array_values($prices); //reindexes the values of the array
        print_r($prices);
        
        //sort($prices);
        echo "<br />";
        print_r($prices);
        
        for($i = 0; $i < count($prices); $i++){
            
            echo $prices[$i]. "<br/>";
            
        }
        
        } 
        
        
        function  associativeArrays(){
            
            $products = array("iPad Mini" => 250, "iPad Air" => 700);
            //print_r($products);
                $products ["iPad Pro "] = 450;
                
                $firstproduct  =$products["iPad Mini"];
                
            //echo $products["iPad Mini"]; //displays value for this specific key
            
            foreach($products as $productname => $price) {
                
                echo $productname. " ". $price. "<br />"; 
            }
        }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Arrays Review </title>
    </head>
    <body>
        
        <h1> Arrays in PHP </h1>
        
        
        <?= associativeArrays() ?>
        
         
         <hr>
       
    </body>
</html>