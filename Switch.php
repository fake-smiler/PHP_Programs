<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
	<h1>Switch Condition</h1>
	
	<?php
	$favcolor = "Blue";

	switch($favcolor) {
		case "red":
		echo "My fav color is red";
		break;

		case "green":
		echo "My fav color is green";
		break;

		case "black":
		echo "My fav color is blue";
		break;

		case "yellow":
		echo "My fav color is yellow";
		break;

		default : 
		echo "I dont like any colors";
	}

	?>
</body>
</html>
