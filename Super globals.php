<!DOCTYPE html>
<html>
<head>
	<meta name="viewpor"content="width=device-width,initial-scale=1">
</head>
<body>
	<h1>Super Globals</h1>
	<h2>$_SERVER</h2>
	<form method="post"action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="text"name="fname">
		<input type="submit"name="Submit">
	</form>

	<?php
	/*echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = htmlspecialchars($_REQUEST['fname']);
		if(empty($name)) {
			echo "Empty Characters";
		}
		else {
			echo $name;
		}
	}

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = htmlspecialchars($_POST['fname']);
		if(empty($name)) {
			echo "Empty Charaters";
		}
		else {
			echo $name;
		}
	}*/

	$x = 5;
	$y = 6;

	function demo() {
		 $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	}
	demo();
	echo $z;


	?>
</body>	
</html>