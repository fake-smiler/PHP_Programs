<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
	<h1>PHP VARIABLES</h1>
	<?php
	/*$txt = "Hello php";
	$x = 21;
	$y = 10.21;
	$txt_1 = "W3 school";
	$txt_2 = "W3 schools.com";

	echo "$txt";
	echo "<br>";
	echo "$x";
	echo "<br>";
	echo "$y";
	echo "<br>";
	echo "I love $txt_1";
	echo "<br>";
	echo "I love ".$txt_2."!";
	echo "<br>";
	echo $x + $y;
	echo "<br>";

	//Global variable
	$x = 5;//Global variable
	function MyTest() {
		//Using x inside function will generate an error
		echo "<p>Function inside of : $x</p>";
	}
	MyTest();

	echo "<p>Funtion outide of : $x</p>";

    function MyTest() {
    	$x = 5;//Local variable
    	echo "<p>Function inside of : $x</p>";
    }
    MyTest();
   //Using x outside function will generate an error
    echo "<p>Function outside of : $x</p>";

    function MyTest() {
    	static $x = 0;
    	echo $x;
    	$x++;
    }
    MyTest();
    echo "<br>";
    MyTest();
    echo "<br>";
    MyTest();
    echo "<br>";*/

    $x = 6;
    $y = 5;
    function MyTest() {
    	//global $x,$y;
    	//$y = $x + $y;
    	$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    MyTest();
    echo $y;
	?>
</body>
</html>