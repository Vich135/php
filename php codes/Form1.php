<html>
<body>

<?php
$name='';
$age='';
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
if (isset($_POST["n1"]))
$name=$_POST['n1'];

if (isset($_POST["a1"]))
$age=$_POST['a1'];
}



function checkName($name){

if($_SERVER["REQUEST_METHOD"] == "POST"){
if (isset($_POST["n1"]))
$name=$_POST['n1'];

if(empty($name))  
  {
	echo "Please enter your name!",'<br />';
  }
else if(!preg_match("/^[a-zA-Z ]*$/",$name)) 
  {
    echo "Illegal name type! Please enter again",'<br />';
  }
}
}


function checkAge($age){

if($_SERVER["REQUEST_METHOD"] == "POST"){	
if (isset($_POST["a1"]))
$age=$_POST['a1'];

  if(empty($age))  
  {
	echo "Please enter your age!",'<br />';
  }
else if(!preg_match("/^[0-9]*$/",$age)) 
  {
    echo "Illegal age type! Please enter again",'<br />';
  }
}
}
 ?>
 
 <h2>Please input your info.</h2>
<form name="f1" action="Form1.php" method="POST"> 
<fieldset>
 <p>Your name:</p>
 <input type="text" name="n1" value="<?php echo $name;?>" /><?php 
 if($_SERVER["REQUEST_METHOD"] == "POST"){ checkName($name);}?>
<p>Your age:</p> 
 <input type="text" name="a1" value="<?php echo $age;?>"/><?php 
 if($_SERVER["REQUEST_METHOD"] == "POST"){checkAge($age);}?>
<p>
<input type="reset"  value="Clear"/>
<input type="submit" name="s1" value="Submit"/>
</p> 
</fieldset> 
 </form>
 
 
 <?php
echo "Your information:",'<br />';
echo "Name: $name";
echo "<br>";
echo "Age: $age";
echo "<br>";
?>


 </body>
 </html>