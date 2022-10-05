<?php
print "<p>ejercisio 1</p>\n";

//foreach recorer  saca lo que tiene
$par=[2,4,6,8,10,12,14,16,18,20];

foreach ($par as $valor){
print "$valor<p></p>\n";}






?>




<?php
print "<p>ejercisio 2</p>\n";

$nom = ["Pedro","Ana","34","1"];

print_r($nom);


?>




<?php
print "<p>ejercisio 3</p>\n";

$ray =[
'Nombre' => "Pedro"
,'Apellido' =>  "Torres"
,'Dirección' =>  "Av. Mayor 3703"
,'Teléfono' =>  1122334455
];
foreach ($ray as $valor){
    print "su valor son : $valor <p></p>\n" ;}

?>



<?php
print "<p>ejercisio 4</p>\n";
$ciudad = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

    print " La ciudad con el índice 0 tiene el nombre $ciudad[0]  " ;


?>

<?php
print "<p>ejercisio 5</p>\n";
$array =[
    'MD' => "Madrid",
    'BCL' => "Barcelona",
    'LD' => "Londres",
    'NY' => "New York",
    'LA' => "Los Angeles",
    'CCG' => "Chicago"
];
foreach ($array as $indice => $valor) { 
    print " el indice de $valor es $indice <p></p>\n";
    
}


?>