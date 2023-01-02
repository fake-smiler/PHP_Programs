<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
	<h1>For Loop</h1>
	<?php
	/*for($x=0;$x <= 10;$x++) {
		echo "This number is : $x<br>";
	}*/

	$favcolor = array("Red","Green","Yellow","Blue");

	foreach($favcolor as $value) {
		echo "$value<br>";
	}
	?>
</body>
</html>