<html>
<head>
<title>Assign2
</head>
<body>
<?php
$searchTerms = array("milk", "beef","biscuits","fish");
$searchCounts = array(1,2,3,4);

function auto($search){
    global $searchTerms;
    global $searchCounts;
    $similarRecords=array();
    for($i=0;$i<count($count($searchTerms);i++){
		if(strpos($searchTerms[$i],$search)===0 &&strcasecmp($search,$searchtERMS[$I]==0){
			$searchCounts[$i]++;
			$similarRecords["$searchTerms[$i]"]="$searchCounts[$i]";
		}
	    else if (strpos($searchTerms[$i],$search)=== && strcasecmp($search,$searchTerms[$i])!=0){
			$similarRecords["$searchTerms[$i]"]= "$searchCounts[$i]";
		} 
	}
    if($similarRecords != null){
		arsort($similarRecords);
		foreach($similarRecords as $x=> $x_value){
			echo $x." ".$x_value."time(s)";
			echo "<br>";
		}
		return $similarRecords;
	}
    else {
	$searchTerms[]=$search;
	$searchCounts[]=i;
	echo $searchTerms[count($searchTerms)-1]." ".$serachCounts(count($searchTerms)-1]."time(s)";
    }	
}

auto("m");
echo "<br>";
auto("b");
echo "<br>";
auto("be");
echo "<br>";
auto("f");
echo "<br>";
auto("milk");
echo "<br>";
auto("banana");
echo "<br>";