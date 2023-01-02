<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
	<h1>PHP Session variable set</h1>
	<?php
	echo "Your Fav color is : " . $_SESSION['favcolor'] . "<br>";
	echo" Your fav movie is : " . $_SESSION['favmovie'] . "<br>";
	print_r($_SESSION);
	?>
</body>
</html>