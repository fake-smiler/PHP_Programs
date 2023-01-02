<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
	<h1>How to File Read and file Open Read Close</h1>
	<?php
	//readfile("webdictionary.txt");

	/*$myfile = fopen("webdictionary.txt" , "r") or die ("Unable to open file");
	echo fread($myfile,filesize("webdictionary.txt"));
	fclose($myfile);

	$myfile = fopen("webdictionary.txt","r") or die("Unable to open file");

	while(!feof($myfile)) {
		echo fgets($myfile) . "<br>";
	}
	fclose($myfile);*/

	$myfile = fopen("webdictionary.txt","r") or ("Unable to file open");
	echo fgets($myfile);
	fclose($myfile);
	?>
</body>
</html>