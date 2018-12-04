<html>
<body>
<h1>Assign 6 Advanced</h1>
<p></p>
<form name="f1" action="Assign6.php" method="POST" > 
<p>
<input type="submit" name="s1" value="CountColor"/>
</p>
<p>
<input type="submit" name="s2" value="CountPrice"/>
</p>
<p>
<input type="submit" name="s3" value="CountSize"/>
</p> 
<?php

$server_name="localhost";
$user_name="root";
$user_password="";
$database_name="collection";
$table_name="text";
$conn=new mysqli($server_name,$user_name,$user_password,$database_name);
$result = mysqli_query($conn,"SELECT * FROM collection.item");
$data = array();
while($rs = mysqli_fetch_assoc($result)){
            $data[] = $rs;
}

function getAttr1($a){
    $rs1=array();
    foreach($a as $v){
        $rs1[]=$v['Color'];
    }
        
    $colorArr=array_count_values($rs1);

    foreach ($colorArr as $k=>$v) {
		echo '<pre>';
        echo $k.':'.$v;
        echo '<pre>';
    }
}
function getAttr2($a){
    $rs1=array();
    foreach($a as $v){
        $rs1[]=$v['Price'];
    }
        
    $priceArr=array_count_values($rs1);

    foreach ($priceArr as $k=>$v) {
		echo '<pre>';
        echo 'price of '.$k.':'.$v;
        echo '<pre>';
    }
}
function getAttr3($a){
    $rs1=array();
    foreach($a as $v){
        $rs1[]=$v['Size'];
    }
        
    $sizeArr=array_count_values($rs1);

    foreach ($sizeArr as $k=>$v) {
		echo '<pre>';
        echo $k.':'.$v;
        echo '<pre>';
    }
}
if(isset($_POST["s1"])){
	getAttr1($data);
}
elseif(isset($_POST["s2"])){
	getAttr2($data);
}
elseif(isset($_POST["s3"])){
	getAttr3($data);
}





	
?>