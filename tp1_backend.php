<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>punto 1</h1>
<?php 
//punto 1
	$Saludo = "hola mundo  ";
echo $Saludo;

 ?>
 <br><hr>

<h1>punto 2</h1>

<?php
//punto 2
echo "hola mundo";
  ?>

  <br><hr>

<h1>punto 3</h1>

<?php 
//punto 3
$manzanas = 60;
$banana = 21;
$frutas = $manzanas + $banana;

echo $frutas;


 ?>
 <br><hr>
<?php 

$manzanas = 60;
$banana = 21;
$frutas = $manzanas - $banana;

echo $frutas;
 ?>
<br><hr>
<?php 

$manzanas = 60;
$banana = 20;
$frutas = $manzanas / $banana;

echo $frutas; ?>
<br><hr>
<?php 

$manzanas = 60;
$banana = 21;
$frutas = $manzanas * $banana;

echo $frutas; ?>
<br><hr>
<?php  
$manzanas = 60;
$banana = 21;
$frutas = $manzanas % $banana;

echo $frutas;
?>
<br><hr>
<h1>punto 4</h1>


<?php  
//punto 4 conversion de celcius a farengei

$celsius=20;
$a =1.8;
$b =32;
$tranforma = $celsius * $a + $b;
echo $tranforma;

?>
<br><hr>
<h1>punto 5</h1>

<?php 
//punto 5  (A)
$base = 18;
$altura = 12;
$perimetro = $base + $altura;
$area =$base * $altura;
echo $perimetro;
echo "<br>";
echo $area;

 ?>



<br><hr>

<?php  
//punto 5  (B)
$radio = 30;
$pi = 3.14;
$doblepi= 2;

$perimetro = $doblepi * $pi * $radio;
$area =$pi *($radio * $radio);
echo $perimetro;
echo "<br>";
echo $area;


?>
</body>
</html>