<html>
<head>
<style>
span{
color: red;	
}
</style>
</head>
<body>
<a href="Assign4(1).php">Admin Mode</a>
<p></p>
<?php
$myfile2 = fopen("file2.txt", "w");
$condition= "";
$i=0;
$v=0;
$p=0;

if($_SERVER["REQUEST_METHOD"] == "POST"){


$condition=$_POST['n2'];

if($condition== "valid"){
$v=$v+1;
$p=$p+1;
$txt="invalid: "."$i".'<br />';
fwrite($myfile2, $txt);
$txt="valid: "."$v".'<br />';
fwrite($myfile2, $txt);
$txt="process: "."$p".'<br />';
fwrite($myfile2, $txt);	
}

else{
$i=$i+1;
$p=$p+1;
$txt="invalid: "."$i".'<br />';
fwrite($myfile2, $txt);
$txt="valid: "."$v".'<br />';
fwrite($myfile2, $txt);
$txt="process: "."$p".'<br />';
fwrite($myfile2, $txt);	
}
}
?>


<form name="f2" action="Assign4(3).php" method="POST"> 
<fieldset>
<p>Condition:</p>
 <input type="text" name="n2" />
 <p>
<input type="submit" name="s2" value="Submit"/>
</p> 
 </fieldset>
 </form>

<?php
echo file_get_contents("file2.txt");
echo "<br>";
?>
</body>
 </html> 