<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<H1>TRABAJO PRACTICO  1</H1>
<P>estan la clases y  lostra bajops paractiicos todo junto en el mismo archivo trabaj1,clas2,trabaj2,...</P>
<h2>punto 1</h2>
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





<h1> clase 3</h1>



<h4>estructura de control</h4>

<?php
//sintacsis del if : si  pasa esto hace esto

$a = 82;
$b = 253;
$c = 4;

//hacer algo sino hacer 
if ($a > $b) {
	echo "A es ,ayor que B";
	
}
else {
	echo "B es mayor a A";
}

echo "<br>";
//hacer algo si pasa esto
if ($a > $c) {
	echo "A es ,mayor que c";
	
}

echo "<br>" ;
//hacer esto , sino hacer esto ,sino es ninguna de esas que sea else

if ($a == $b) {
	echo "A es ,mayor que B";
	
}
elseif ($a > $b) {
	echo " B es mayor  A ";
}
else {
	echo "error";
}

?>


<h1>TRABAJO NUMERO 2</h1>

<?php




?>




</body>
</html>