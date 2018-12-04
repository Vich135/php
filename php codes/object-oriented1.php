<html lang="en">
<head>
<title>object-oriented</title>
</head>
<body>
<pre>

<?php 

$flat1 = new Flat ("F1", "Sydney", 300);
$flat2 = new Flat ("F2", "Wollongong", 100);
$flat3 = new Flat ("F3", "Hurstville", 200);

$flat = array ();
$flat[] = $flat1;
$flat[] = $flat2;
$flat[] = $flat3;


Flat::showTotalRent ($f);



class Flat
{
	private $id;
	private $suburb;
	private $rent;
	
	function __construct ($id, $suburb = "", $rent = "")
	{
		$this->id = $id;
		$this->suburb = $suburb;
		$this->rent = $rent;
	}

	function getRent ()
	{
		return $this->rent;
	}	
	
	static function showTotalRent ($f)
	{
		$total = 0;
		foreach ($f as $f1) {
				$total += $f1->getRent ();
			}
		echo "Total rent = $total";
	}
}

?>

</pre>
</body>
</html>