<html>
<body>
<h1>Assign5</h1>
<body>
<form action="Assign5.php" method="POST" >
<p>Colour</p>
<input type="checkbox" name="c1" value="red">red<br>
<input type="checkbox" name="c2" value="blue">blue<br>
<input type="checkbox" name="c3" value="white">white<br><br>
<p>Size</p>
<input type="checkbox" name="c4" value="small">small<br>
<input type="checkbox" name="c5" value="medium">medium<br>
<input type="checkbox" name="c6" value="large">large<br><br>
<p>Price</p>
<input type="checkbox" name="c7" value="p5">5<br>
<input type="checkbox" name="c8" value="p15">15<br>
<input type="checkbox" name="c9" value="p35">35<br><br>
<input type="checkbox" name="c10" value="none">No requirements<br><br>
<input type="submit" value="Submit">
</form>
 
<?php

$collection = array( 
 array ("ProdID" => 1, "Colour" => "red", "Size" => "small", "Price" => 5),
 array ("ProdID" => 2, "Colour" => "red", "Size" => "small", "Price" => 15),
 array ("ProdID" => 3, "Colour" => "red", "Size" => "small", "Price" => 35),
 array ("ProdID" => 4, "Colour" => "red", "Size" => "large", "Price" => 5),
 array ("ProdID" => 5, "Colour" => "red", "Size" => "large", "Price" => 15),
 array ("ProdID" => 6, "Colour" => "red", "Size" => "large", "Price" => 35),
 array ("ProdID" => 7, "Colour" => "red", "Size" => "medium", "Price" => 5),
 array ("ProdID" => 8, "Colour" => "red", "Size" => "medium", "Price" => 15),
 array ("ProdID" => 9, "Colour" => "red", "Size" => "medium", "Price" => 35),
 array ("ProdID" => 10, "Colour" => "blue", "Size" => "small", "Price" => 5),
 array ("ProdID" => 11, "Colour" => "blue", "Size" => "small", "Price" => 15),
 array ("ProdID" => 12, "Colour" => "blue", "Size" => "small", "Price" => 35),
 array ("ProdID" => 13, "Colour" => "blue", "Size" => "large", "Price" => 5),
 array ("ProdID" => 14, "Colour" => "blue", "Size" => "large", "Price" => 15),
 array ("ProdID" => 15, "Colour" => "blue", "Size" => "large", "Price" => 35),
 array ("ProdID" => 16, "Colour" => "blue", "Size" => "medium", "Price" => 5),
 array ("ProdID" => 17, "Colour" => "blue", "Size" => "medium", "Price" => 15),
 array ("ProdID" => 18, "Colour" => "blue", "Size" => "medium", "Price" => 35),
 array ("ProdID" => 19, "Colour" => "white", "Size" => "large", "Price" => 5),
 array ("ProdID" => 20, "Colour" => "white", "Size" => "large", "Price" => 15));
     $cred="";
	 $cblue="";
	 $cwhite="";
	 $ssmall="";
	 $smedium="";
	 $slarge="";
	 $price5="";
	 $price15="";
	 $price35="";
	 $nnone="";


 if($_SERVER["REQUEST_METHOD"] == "POST"){
	 
 if (isset($_POST["c1"]))
     $cred=$_POST['c1'];
 if (isset($_POST["c2"]))
	 $cblue=$_POST['c2'];
 
 if (isset($_POST["c3"]))
	 $cwhite=$_POST['c3'];
 
 if (isset($_POST["c4"]))
	 $ssmall=$_POST['c4'];
 
 if (isset($_POST["c5"]))
	 $smedium=$_POST['c5'];
 
 if (isset($_POST["c6"]))
	 $slarge=$_POST['c6'];
 
 if (isset($_POST["c7"]))
	 $price5=$_POST['c7'];
 
 if (isset($_POST["c8"]))
	 $price15=$_POST['c8'];
 
 if (isset($_POST["c9"]))
	 $price35=$_POST['c9'];
 
 if (isset($_POST["c10"]))
	 $nnone=$_POST['c10'];
	 
	 if($cred == "red" && $ssmall == "small" && $price5 == "p5" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'small'),'Price', '5')); 
		  echo '<pre>';
     }
	 
	 else if($cred == "red" && $ssmall == "small" && $price15 == "p15" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'small'),'Price', '15')); 
		  echo '<pre>';
     }

	 else if($cred == "red" && $ssmall == "small" && $price35 == "p35" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'small'),'Price', '35')); 
		  echo '<pre>';
     }

	 else if($cred == "red" && $smedium == "medium" && $price5 == "p5" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'medium'),'Price', '5')); 
		  echo '<pre>';
     }

	 else if($cred == "red" && $smedium == "medium" && $price15 == "p15" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'medium'),'Price', '15')); 
		  echo '<pre>';
     }

	 else if($cred == "red" && $smedium == "medium" && $price35 == "p35" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'medium'),'Price', '35')); 
		  echo '<pre>';
     }

	 else if($cred == "red" && $slarge == "large" && $price5 == "p5" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'large'),'Price', '5')); 
		  echo '<pre>';
     }		 
	 
	 else if($cred == "red" && $slarge == "large" && $price15 == "p15" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'large'),'Price', '15')); 
		  echo '<pre>';
     }

	 else if($cred == "red" && $slarge == "large" && $price35 == "p35" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'large'),'Price', '35')); 
		  echo '<pre>';
     }

	 else if($cblue == "blue" && $ssmall == "small" && $price5 == "p5" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'small'),'Price', '5')); 
		  echo '<pre>';
     }

	 else if($cblue == "blue" && $ssmall == "small" && $price15 == "p15" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'small'),'Price', '15')); 
		  echo '<pre>';
     }	

	 else if($cblue == "blue" && $ssmall == "small" && $price35 == "p35" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'small'),'Price', '35')); 
		  echo '<pre>';
     } 	 

	 else if($cblue == "blue" && $smedium == "medium" && $price5 == "p5" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'medium'),'Price', '5')); 
		  echo '<pre>';
     }

	 else if($cblue == "blue" && $smedium == "medium" && $price15 == "p15" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'medium'),'Price', '15')); 
		  echo '<pre>';
     }		 

	 else if($cblue == "blue" && $smedium == "medium" && $price35 == "p35" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'medium'),'Price', '35')); 
		  echo '<pre>';
     }
	 
	 else if($cblue == "blue" && $slarge == "large" && $price5 == "p5" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'large'),'Price', '5')); 
		  echo '<pre>';
     }
	 
	 else if($cblue == "blue" && $slarge == "large" && $price15 == "p15" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'large'),'Price', '15')); 
		  echo '<pre>';
     }

	 else if($cblue == "blue" && $slarge == "large" && $price35 == "p35" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'large'),'Price', '35')); 
		  echo '<pre>';
     }

	 else if($cwhite == "white" && $ssmall == "small" && $price5 == "p5" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'small'),'Price', '5')); 
		  echo '<pre>';
     }

	 else if($cwhite == "white" && $ssmall == "small" && $price15 == "p15" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'small'),'Price', '15')); 
		  echo '<pre>';
     }

	 else if($cwhite == "white" && $ssmall == "small" && $price35 == "p35" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'small'),'Price', '35')); 
		  echo '<pre>';
     }

	 else if($cwhite == "white" && $smedium == "medium" && $price5 == "p5" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'medium'),'Price', '5')); 
		  echo '<pre>';
     }

	 else if($cwhite == "white" && $smedium == "medium" && $price15 == "p15" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'medium'),'Price', '15')); 
		  echo '<pre>';
     }

	 else if($cwhite == "white" && $smedium == "medium" && $price35 == "p35" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'medium'),'Price', '35')); 
		  echo '<pre>';
     }	

	 else if($cwhite == "white" && $slarge == "large" && $price5 == "p5" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'large'),'Price', '5')); 
		  echo '<pre>';
     }

	 else if($cwhite == "white" && $slarge == "large" && $price15 == "p15" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'large'),'Price', '15')); 
		  echo '<pre>';
     }

	 else if($cwhite == "white" && $slarge == "large" && $price35 == "p35" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'large'),'Price', '35')); 
		  echo '<pre>';
     }
	 
	 else if($cred == "red" && $ssmall == "small" ){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'red'),'Size', 'small')); 
		  echo '<pre>';
     }
	
     else if($cred == "red" && $smedium == "medium"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'red'),'Size', 'medium')); 
		  echo '<pre>';
     }

	 else if($cred == "red" && $slarge == "large"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'red'),'Size', 'large')); 
		  echo '<pre>';
     }
	 

	 

     else if($cblue == "blue" && $ssmall == "small"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'blue'),'Size', 'small')); 
		  echo '<pre>';
     }
	 
     else if($cblue == "blue" && $smedium == "medium"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'blue'),'Size', 'medium')); 
		  echo '<pre>';
     }	 

     else if($cblue == "blue" && $slarge == "large"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'blue'),'Size', 'large')); 
		  echo '<pre>';
     }    
	 

	 
     
     else if($cwhite == "white" && $ssmall == "small"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'white'),'Size', 'small')); 
		  echo '<pre>';
     }

     else if($cwhite == "white" && $smedium == "medium"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'white'),'Size', 'medium')); 
		  echo '<pre>';
     }

     else if($cwhite == "white" && $slarge == "large"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'white'),'Size', 'large')); 
		  echo '<pre>';
     }
	 
 
	 
     else if($ssmall == "small" && $price5 == "p5"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'small'),'Price', 5)); 
		  echo '<pre>';
     }	 

     else if($ssmall == "small" && $price15 == "p15"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'small'),'Price', '15')); 
		  echo '<pre>';
     }	 

     else if($ssmall == "small" && $price35 == "p35"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'small'),'Price', '35')); 
		  echo '<pre>';
     }	     



     else if($smedium == "medium" && $price5 == "p5"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'medium'),'Price', '5')); 
		  echo '<pre>';
     }	

     else if($smedium == "medium" && $price15 == "p15"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'medium'),'Price', '15')); 
		  echo '<pre>';
     }	 	 

     else if($smedium == "medium" && $price35 == "p35"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'medium'),'Price', '35')); 
		  echo '<pre>';
     }	 	 


	 

     else if($slarge == "large" && $price5 == "p5"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'large'),'Price', '5')); 
		  echo '<pre>';
     }	

     else if($slarge == "large" && $price15 == "p15"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'large'),'Price', '15')); 
		  echo '<pre>';
     }

     else if($slarge == "large" && $price35 == "p35"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'large'),'Price', '35')); 
		  echo '<pre>';
     }		 
	 



	 
	 else if($cred == "red" && $price5 == "p5"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'red'),'Price', '5')); 
		  echo '<pre>';
     }
	 
	 else if($cred == "red" && $price15 == "p15"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'red'),'Price', '15')); 
		  echo '<pre>';
     }	 

	 else if($cred == "red" && $price35 == "p35"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'red'),'Price', '35')); 
		  echo '<pre>';
     }	 	 

	 else if($cblue == "blue" && $price5 == "p5"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'blue'),'Price', '5')); 
		  echo '<pre>';
     }	

	 else if($cblue == "blue" && $price15 == "p15"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'blue'),'Price', '15')); 
		  echo '<pre>';
     }

	 else if($cblue == "blue" && $price35 == "p35"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'blue'),'Price', '35')); 
		  echo '<pre>';
     }		 

	 else if($cwhite == "white" && $price5 == "p5"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'white'),'Price', '5')); 
		  echo '<pre>';
     }		 

	 else if($cwhite == "white" && $price15 == "p15"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'white'),'Price', '15')); 
		  echo '<pre>';
     }

	 else if($cwhite == "white" && $price35 == "p35"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'white'),'Price', '35')); 
		  echo '<pre>';
     }
	 
	 else if($cred == "red" && $cblue =="blue" ){
		  echo '<pre>';
		 print_r(search($collection, 'Colour', 'red'));
         print_r(search($collection, 'Colour', 'blue')); 		 
		  echo '<pre>';
     }
	 
	 else if($cred == "red" && $cwhite =="white" ){
		  echo '<pre>';
		 print_r(search($collection, 'Colour', 'red'));
         print_r(search($collection, 'Colour', 'white')); 		 
		  echo '<pre>';
     }	

	 else if($cblue == "blue" && $cwhite =="white" ){
		  echo '<pre>';
		 print_r(search($collection, 'Colour', 'blue'));
         print_r(search($collection, 'Colour', 'white'));		 
		  echo '<pre>';
     }

	 else if($ssmall == "small" && $smedium =="medium" ){
		  echo '<pre>';
		 print_r(search($collection, 'Size', 'small'));
         print_r(search($collection, 'Size', 'medium'));		 
		  echo '<pre>';
     }

	 else if($ssmall == "small" && $slarge =="large" ){
		  echo '<pre>';
		 print_r(search($collection, 'Size', 'small')); 
		 print_r(search($collection, 'Size', 'large')); 
		  echo '<pre>';
     }

	 else if($smedium == "medium" && $slarge =="large" ){
		  echo '<pre>';
		 print_r(search($collection, 'Size', 'medium')); 
		 print_r(search($collection, 'Size', 'large')); 
		  echo '<pre>';
     }

	 else if($price5 == "p5" && $price15 == "p15" ){
		  echo '<pre>';
		 print_r(search($collection, 'Price', '5'));
         print_r(search($collection, 'Price', '15')); 		 
		  echo '<pre>';
     }

	 else if($price15 == "p15" && $price35 == "p35" ){
		  echo '<pre>';
		 print_r(search($collection, 'Price', '15'));
         print_r(search($collection, 'Price', '35'));		 
		  echo '<pre>';
     }	

	 else if($price5 == "p5" && $price35 == "p35" ){
		  echo '<pre>';
		 print_r(search($collection, 'Price', '5')); 
		 print_r(search($collection, 'Price', '35'));
		  echo '<pre>';
     }		 
	
	 else if($cred == "red"){
		  echo '<pre>';
		 print_r(search($collection, 'Colour', 'red')); 
		  echo '<pre>';
     }	

	 else if($cblue == "blue"){
		  echo '<pre>';
		 print_r(search($collection, 'Colour', 'blue')); 
		  echo '<pre>';
     }

	 else if($cwhite == "white"){
		  echo '<pre>';
		 print_r(search($collection, 'Colour', 'white')); 
		  echo '<pre>';
     }	

	 else if($ssmall == "small"){
		  echo '<pre>';
		 print_r(search($collection, 'Size', 'small')); 
		  echo '<pre>';
     }	

	 else if($smedium == "medium"){
		  echo '<pre>';
		 print_r(search($collection, 'Size', 'medium')); 
		  echo '<pre>';
     }	

	 else if($slarge == "large"){
		  echo '<pre>';
		 print_r(search($collection, 'Size', 'large')); 
		  echo '<pre>';
     }
	 
	 else if($price5 == "p5"){
		  echo '<pre>';
		 print_r(search($collection, 'Price', 5)); 
		  echo '<pre>';
     }

	 else if($price15 == "p15"){
		  echo '<pre>';
		 print_r(search($collection, 'Price', 15)); 
		  echo '<pre>';
     }

	 else if($price35 == "p35"){
		  echo '<pre>';
		 print_r(search($collection, 'Price', 35)); 
		  echo '<pre>';
     }
	 
     else if($nnone =="none"){
	     echo '<pre>';	 
	    print_r($collection);
         echo '<pre>';
	 }

	 
	 
	 
	 

	 
 }
 
 function search($array, $key, $value)
{
    $results = array();

    if (is_array($array)) {
        if (isset($array[$key]) && $array[$key] == $value) {
            $results[] = $array;
        }

        foreach ($array as $x) {
            $results = array_merge($results, search($x, $key, $value));
        }
    }

    return $results;
}
?>

</body>
</html> 

 