<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>TRABAJO NUMERO 2</h1>

<?php
//punto 1
$n = 10;
if ($n>0) {
	echo "es un numero posiivo";

}
else {
	echo " es un numer negativ";
}


?>

<br><br>


<?php
// punto 2
$n = 5;
 if ($n > 1 & $n < 10) {
	echo "el numero es mayor a 1 y menor a 10";
 }

 else {
	echo " es un numer es menor a 1 o mayor a 10";
}

?>


<br><br><br>

<?php
//punto 3

$n= 11;
if ($n>10 || $n<2) {
	echo "el numero es mayor a 10 o menor a 2";
}


?>
<br><br>


<?php
// punto 4

$numero1 = 2 ;
$numero2 = 1;
$sumaa = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$divicion = $numero1 / $numero2;
$resto= $numero1 % $numero2;

if ($numero1 > $numero2) {
	echo "suma $sumaa " ;
	echo "resta $resta"  ;
}
elseif ($numero1 < $numero2) {
	echo "resto $resto " ;
	echo "divicion $divicion"  ;
}


elseif ($numero1 == $numero2){
	echo "Los números ingresados son iguales";
}
?>


</body>
</html></html>