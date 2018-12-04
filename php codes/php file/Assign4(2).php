<html>
<body>
<a href="Assign4(1).php">Admin Mode</a>
<p></p>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$myfile = fopen("file1.txt", "a+");
$name=$_POST['n1'];
$place=$_POST['p1'];
$np=$name.' '.$place.'<br />';
$txt=$np;
fwrite($myfile, $txt);
fclose($myfile);
}
?>

<?php
echo "Item Collection:",'<br />','<br />';
echo file_get_contents("file1.txt");
echo "<br>";
?>


</body>
 </html> 