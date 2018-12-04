<?php 
echo 'Hellow customer,','<br />';
$time = date("H");
if ($time < "18") {
echo 'Good day!';
}
else {
	echo 'Good night!';	
} 

echo '<br />','<br />';
$shoppinglist = array('beef','fish','apple');
echo 'Today, you have bought '.count($shoppinglist).' items','<br />';

$nums[0] = 1;
$nums[1] = 2;
$nums[2] = 3;
echo $nums[0].' item'.' are beef'.'<br />';
echo $nums[1].' item'.' are fish'.'<br />';
echo $nums[2].' item'.' are apples'.'<br />';

function sum($a, $b, $c) {
    $s = $a + $b + $c;
    return $s;
}
echo '<br />','The sum cost is '. sum(10,20,30) . " dollars".'<br />','<br />';

$n=1;
while($n<=3){
echo 'You have paid '.$n.' items'.'<br />';
$n++;
}
?> 