<<<<<<< HEAD
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
=======
<?php
      
    function indexedArrays() {  
          $prices = array(500, 300, 600);
          print_r($prices);  /* Displays content of array */
          
          array_push($prices, 100); //adds an element to the end of the array
          $prices[] = 200; //adds an element to the end of the array
          echo "<br />";
          print_r($prices);
          unset($prices[1]);
          echo "<br />";
          print_r($prices);
          echo "<br />";
          $prices = array_values($prices); //reindexes the values of the array
          
          print_r($prices);
          
          //sort($prices);
           echo "<br />";
          print_r($prices);
          
          //displaying one value at a time
          for ($i=0; $i < count($prices); $i++) { //looping through the indexed array
              echo $prices[$i] . "<br />";
          }
          
    }      
    
    function associativeArrays() { 
     
     $products = array("iPad Mini"=>250,"iPad Pro"=>700);
    
     print_r($products);    
     
     $products["iPad Air"]  = 450;
     
     echo $products["iPad Mini"]; //displays value for this specific key
     
     foreach ( $products as  $key => $value ) {
         
         echo $key . "   "  . $value . "<br />";
         
     }
     
    }    

         ?>
>>>>>>> 528db370842b17e86b28fae18bbbc796a7e8a860

<!DOCTYPE html>
<html>
    <head>
        <title> Arrays Review </title>
    </head>
    <body>
<<<<<<< HEAD
        
        <h1> Arrays in PHP </h1>
        
        
=======

        <h1> Arrays  in PHP </h1>
      
>>>>>>> 528db370842b17e86b28fae18bbbc796a7e8a860
        <?= associativeArrays() ?>
        
         
         <hr>
<<<<<<< HEAD
       
=======
         
       
         
>>>>>>> 528db370842b17e86b28fae18bbbc796a7e8a860
    </body>
</html>