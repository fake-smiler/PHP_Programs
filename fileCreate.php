<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,intial-scale=1">
</head>
<body>
	<h1>How to create file and write?</h1>
	<?php
	$myfile = fopen("testfile.txt","w") or die ("Unable to file open");
	$txt = "Ram";
	fwrite($myfile,$txt);
	echo "<br>";
	$txt = "Radha";
	fwrite($myfile,$txt);
	fclose($myfile);
	?>
</body>
</html>