<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
	<h1>Sorting array</h1>
	<?php
	/*$cars = array("VOLVO","BMW","FIAT","FORD","TOYOTO");
	sort($cars);

	$clength = count($cars);

	for($x = 0; $x < $clength; $x++) {
		echo $cars[$x];
		echo "<br>";
	}

	$cars = array(9,5,3,8,6,2,7,4);
	sort($cars);

	$clength = count($cars);

	for($x = 0; $x < $clength; $x++) {
		echo $cars[$x];
		echo "<br>";
	}

	$cars = array("BMW","FORD","AUDI","TOYOTO");
	rsort($cars);

	$clength = count($cars);

	for($x = 0; $x < $clength; $x++) {
		echo $cars[$x];
		echo "<br>";
	}

	$cars = array(1,4,5,7,8,9,3,2,6);
	rsort($cars);

	$clength = count($cars);

	for($x = 0; $x < $clength; $x++) {
		echo $cars[$x];
		echo "<br>";
	}

	$name = array("Peter"=>"34","Jhon"=>"32","Ram"=>"21");
	asort($name);

	foreach($name as $x => $x_value) {
		echo "Key : " . $x . " Value " . $x_value;
		echo "<br>";
	}

	$name = array("Peter"=>"32","Jhon"=>"25","Ram"=>"21");
	ksort($name);

	foreach($name as $x => $x_value) {
		echo "Key : " . $x . " Value " . $x_value;
		echo "<br>";
	}

	$name = array("Peter"=>"32","Jhon"=>"25","Ram"=>"21");
	arsort($name);

	foreach($name as $x => $x_value) {
		echo "Key : " . $x . " Value " . $x_value;
		echo "<br>";
	}*/

	$name = array("Peter"=>"32","Jhon"=>"25","Ram"=>"21");
	krsort($name);

	foreach($name as $x => $x_value) {
		echo "Key : " . $x . " Value : " . $x_value;
		echo "<br>";
	}
	?>
</body>
</html>