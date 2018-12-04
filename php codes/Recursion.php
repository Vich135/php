<html>
<body>
<h1>Assign8</h1>
<pre>
<?php
$child['Food'] = ['Kind','Size','Price'];
$child['Kind'] = ['Hamburger','Noodles'];
$child['Size'] = ['Small','Medium','Large'];
$child['Price'] = ['1 dollar','2 dollars','3 dollars'];
$child['Hamburger'] = [];
$child['Noodles'] = [];
$child['Small'] = [];
$child['Medium'] = [];
$child['Large'] = [];
$child['1 dollar'] = [];
$child['2 dollars'] = [];
$child['3 dollars'] = [];

$leafValues['Hamburger'] = 2;
$leafValues['Noodles'] = 3;
$leafValues['Small'] = 3;
$leafValues['Medium'] = 4;
$leafValues['Large'] = 5;
$leafValues['1 dollar'] = 1;
$leafValues['2 dollars'] = 2;
$leafValues['3 dollars'] = 3;


treePrint ($child, "Food", $leafValues);
echo '<br/>';

echo 'Kind total value = ' . treeValue($child, 'Kind', $leafValues);
echo '<br/>';
echo 'Size total value = ' . treeValue($child, 'Size', $leafValues);
echo '<br/>';
echo 'Price total value = ' . treeValue($child, 'Price', $leafValues);
echo '<br/>';
echo 'Food total value = ' . treeValue($child, 'Food', $leafValues);
echo '<br/>';






function treePrint ($children, $N, $leafValue, $indent="")
{
  if(array_key_exists($N,$leafValue))
   echo $indent . $N . '('. $leafValue[$N] .')<br/>';
  else
	 echo $indent . $N . '<br/>';


    foreach($children[$N] as $c)
     treePrint ($children, $c, $leafValue, $indent . "\t");

}

function treeValue ($children, $N, $leafValue)
{

	if (empty ($children[$N]))
		return 0;
        $total=0;
  
	foreach ($children[$N] as $a)
  {	  
     if(array_key_exists($a,$leafValue))
     {
       $total = $total + $leafValue[$a];
       treeValue ($children, $a, $leafValue);
     }
     else {
       foreach ($children[$a] as $b)
       {
          if(array_key_exists($b,$leafValue))
          {
            $total = $total + $leafValue[$b];
            treeValue ($children, $b, $leafValue);
          }
        }
     }
  }
	return $total;
}




?>
<pre>
</body>
</html>