<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
	<h1>Data Types</h1>
		<?php
	/*"<h2>String</h2>";
	$x = "Hello World";
	$y = "Hello php";

	echo $x;
	echo "<br>";
	echo $y;

	"<h2>Integer</h2>";
	$x = 23456;

	var_dump($x);

	"<h2>Float</h2>";
	$x = 23.456;

	var_dump($x);

	"<h2>Bollean</h2>";
	$x = true;
	$y = false;

	var_dump($x);

	"<h2>Array</h2>";
	$cars = array("Volvo","BMW","Fiat","Audi");

	var_dump($cars);*/

	"<h2>Object</h2>";
	/*class car {
		function car() {
			$this->model = "BMW";
			$this->engine = "Yamaha";
			$this->color = "Red";
		}
	} 
	$herbie = new car();

	echo $herbie->model;
	echo "<br>";
	echo $herbie->engine;
	echo "<br>";
	echo $herbie->color;*/

	//PHP OBJECTS

Class ram {
Function ram() {
$this->height = 35;
$this->age=21;
$this->weight=50;
$this->skill="null";
}
}
//CREATE OBJECTS

$miku = new ram();
//SHOW OBJECTS PROPERTY

echo $miku->height;
echo "<br>";
echo $miku->age;
echo "<br>";
echo $miku->weight;
echo "<br>";
echo $miku->skill;



	/*"<h2>Null</h2>";
	$x = 34;
	$x = null;

	var_dump($x);*/
	?>
</body>
</html>