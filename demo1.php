<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
	<h1>PHP Sessions</h1>
	<?php
      $_SESSION['favcolor'] = "Blue";
      $_SESSION['favmovie'] = "Bahubali";
      echo "Session variable are set";
	?>