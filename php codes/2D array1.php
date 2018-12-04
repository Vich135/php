<html>
<body>
<h1>Assign5 Advanced</h1>
<body>
<form action="Assign5(3).php" method="POST" >
<p>Colour</p>
<input type="checkbox" name="c1" value="red">red<br>
<input type="checkbox" name="c2" value="blue">blue<br>
<input type="checkbox" name="c3" value="white">white<br><br>
<p>Size</p>
<input type="checkbox" name="c4" value="small">small<br>
<input type="checkbox" name="c5" value="medium">medium<br>
<input type="checkbox" name="c6" value="large">large<br><br>
<p>Price</p>
<input type="checkbox" name="c7" value="low">Low<br>
<input type="checkbox" name="c8" value="p4-6">4-6<br><br>
<input type="checkbox" name="c9" value="high">High<br>
<input type="checkbox" name="c11" value="p16-36">16-36<br><br>
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
	 $price46="";
	 $price1636="";
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
 
 if (isset($_POST["c8"]))
	 $price46=$_POST['c8'];
 
 if (isset($_POST["c11"]))
	 $price1636=$_POST['c11'];
 
 if (isset($_POST["c10"]))
	 $nnone=$_POST['c10'];
	 
	 if($cred == "red" && $ssmall == "small" && $price46 =="p4-6" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'small'),'Price', '5')); 
		  echo '<pre>';
     }
	 
	 else if($cred == "red" && $ssmall == "small" && $price1636 =="p16-36" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'small'),'Price', '35')); 
		  echo '<pre>';
     }


	 else if($cred == "red" && $smedium == "medium" && $price46 =="p4-6" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'medium'),'Price', '5')); 
		  echo '<pre>';
     }

	 else if($cred == "red" && $smedium == "medium" && $price1636 =="p16-36" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'medium'),'Price', '35')); 
		  echo '<pre>';
     }


	 else if($cred == "red" && $slarge == "large" && $price46 =="p4-6" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'large'),'Price', '5')); 
		  echo '<pre>';
     }		 
	 
	 else if($cred == "red" && $slarge == "large" && $price1636 =="p16-36" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'red'),'Size', 'large'),'Price', '35')); 
		  echo '<pre>';
     }


	 else if($cblue == "blue" && $ssmall == "small" && $price46 =="p4-6" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'small'),'Price', '5')); 
		  echo '<pre>';
     }

	 else if($cblue == "blue" && $ssmall == "small" && $price1636 =="p16-36" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'small'),'Price', '35')); 
		  echo '<pre>';
     }	


	 else if($cblue == "blue" && $smedium == "medium" && $price46 =="p4-6" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'medium'),'Price', '5')); 
		  echo '<pre>';
     }

	 else if($cblue == "blue" && $smedium == "medium" && $price1636 =="p16-36" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'medium'),'Price', '35')); 
		  echo '<pre>';
     }		 

	 
	 else if($cblue == "blue" && $slarge == "large" && $price46 =="p4-6" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'large'),'Price', '5')); 
		  echo '<pre>';
     }
	 
	 else if($cblue == "blue" && $slarge == "large" && $price1636 =="p16-36" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'blue'),'Size', 'large'),'Price', '35')); 
		  echo '<pre>';
     }


	 else if($cwhite == "white" && $ssmall == "small" && $price46 =="p4-6" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'small'),'Price', '5')); 
		  echo '<pre>';
     }

	 else if($cwhite == "white" && $ssmall == "small" && $price1636 =="p16-36" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'small'),'Price', '35')); 
		  echo '<pre>';
     }


	 else if($cwhite == "white" && $smedium == "medium" && $price46 =="p4-6" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'medium'),'Price', '5')); 
		  echo '<pre>';
     }

	 else if($cwhite == "white" && $smedium == "medium" && $price1636 =="p16-36" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'medium'),'Price', '35')); 
		  echo '<pre>';
     }



	 else if($cwhite == "white" && $slarge == "large" && $price46 =="p4-6" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'large'),'Price', '5')); 
		  echo '<pre>';
     }

	 else if($cwhite == "white" && $slarge == "large" && $price1636 =="p16-36" ){
		  echo '<pre>';
		 print_r(search(search(search($collection, 'Colour', 'white'),'Size', 'large'),'Price', '35')); 
		  echo '<pre>';
     }
	 
	 else if($cred == "red" && $cblue == "blue" && $cwhite =="white" ){
		  echo '<pre>';
		 print_r(search($collection, 'Colour', 'red'));
         print_r(search($collection, 'Colour', 'blue'));
         print_r(search($collection, 'Colour', 'white'));		 
		  echo '<pre>';
     }
	 
	 else if($ssmall == "small" && $smedium == "medium" && $slarge =="large" ){
		  echo '<pre>';
		 print_r(search($collection, 'Size', 'small'));
         print_r(search($collection, 'Size', 'medium'));
         print_r(search($collection, 'Size', 'large'));		 
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
	 
 
	 
     else if($ssmall == "small" && $price46 =="p4-6"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'small'),'Price', 5)); 
		  echo '<pre>';
     }	 

     else if($ssmall == "small" && $price1636 == "p16-36"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'small'),'Price', '35')); 
		  echo '<pre>';
     }	 

	     



     else if($smedium == "medium" && $price46 =="p4-6"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'medium'),'Price', '5')); 
		  echo '<pre>';
     }	

     else if($smedium == "medium" && $price1636 == "p16-36"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'medium'),'Price', '35')); 
		  echo '<pre>';
     }	 	 

	  

     else if($slarge == "large" && $price46 =="p4-6"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'large'),'Price', '5')); 
		  echo '<pre>';
     }	

     else if($slarge == "large" && $price1636 == "p16-36"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Size', 'large'),'Price', '35')); 
		  echo '<pre>';
     }

		 
	 



	 
	 else if($cred == "red" && $price46 =="p4-6"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'red'),'Price', '5')); 
		  echo '<pre>';
     }
	 
	 else if($cred == "red" && $price1636 == "p16-36"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'red'),'Price', '35')); 
		  echo '<pre>';
     }	 
 	 

	 else if($cblue == "blue" && $price46 =="p4-6"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'blue'),'Price', '5')); 
		  echo '<pre>';
     }	

	 else if($cblue == "blue" && $price1636 == "p16-36"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'blue'),'Price', '35')); 
		  echo '<pre>';
     }



	 else if($cwhite == "white" && $price46 =="p4-6"){
		  echo '<pre>';
		 print_r(search(search($collection, 'Colour', 'white'),'Price', '5')); 
		  echo '<pre>';
     }		 

	 else if($cwhite == "white" && $price1636 == "p16-36"){
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

	 else if($price46 =="p4-6" && $price1636 =="p16-36" ){
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
	 
	 else if($price46 =="p4-6"){
		  echo '<pre>';
		 print_r(search($collection, 'Price', 5)); 
		  echo '<pre>';
     }

	 else if($price1636 =="p16-36"){
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

 