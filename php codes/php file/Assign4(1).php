<html>
<body>
<h1>Admin Mode</h1>
<p></p>

<?php
$myfile = fopen("file2.txt", "r");
$name = "";
$place = "";
 ?>
 
<form name="f1" action="Assign4(2).php" method="POST" target="_blank" > 
<fieldset>
<p>CanteenName:</p>
 <input type="text" name="n1" value="<?php echo $name;?>" />
<p>Place:</p> 
 <input type="text" name="p1" value="<?php echo $place;?>"/> 
<p>
<input type="submit" name="s1" value="Submit"/>
</p> 
</fieldset> 
 </form>
 
 <form name="f2" action="Assign4(2).php">
<input type = "submit" value="download Item Collection"/>
</form>

<form name="f3" action="log2.php">
<input type = "submit" value="download log"/>
</form>
 
 


</body>
 </html> 