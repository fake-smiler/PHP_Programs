<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
	<h2>INDEX ARRAY,ASSOCIATED ARRAY</h2>
	<?php
	/*$cars = array("BMW","FIAT","AUDI","FORD");
	echo "I like " . $cars[0] . " , " . $cars[1] . " , " . $cars[2] . " and " . $cars[3];

	$cars = array("BMW","FIAT","AUDI","FORD");
	echo count($cars);

	$cars = array("BMW","FIAT","FORD","AUDI");
	$arrlength = count($cars);

	for($x = 0;$x < $arrlength;$x++) {
		echo $cars[$x];
		echo "<br>";
	}

	$cars = array("Peter"=>"32","Jhon"=>"45","Ram"=>"21");
	echo "Ram is a " . $cars["Ram"] . "years old.";*/

	$cars = array("Peter"=>"32","Jhon"=>"45","Ram"=>"21");
	foreach($cars as $x => $x_value) {
		echo "Keyname : " . $x . " Value : " . $x_value;
		echo "<br>";
	}
	?>
</body>
</html>