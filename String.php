<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
	<h2>String Function</h2>
	<?php
	$x = strlen("Hello World");
	$y = str_word_count("Hello world");
	$z = strrev("Hello World");
	$a = strpos("Hello World","World");
	$b = str_replace("world","PHP","Hello world");
	echo $x;
	echo"<br>";
	echo $y;
	echo "<br>";
	echo $z;
	echo "<br>";
	echo $a;
	echo "<br>";
	echo $b;
	?>
</body>
</html>