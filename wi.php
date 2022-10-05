<?php
 print "<p>ejercisio 1</p>\n";
$i=1 ;

do {

  print "$i, ";
  $i++;
} while ($i <= 100);

 ?>






 <?php
 print "<p></p>\n";
 print "<p>ejercisio 2</p>\n";
 $i=100;
 do {

   print "$i, ";
   $i--;
 } while ($i >= 1);

  ?>












  <?php
  print "<p></p>\n";
  print "<p>ejercisio 3</p>\n";

for($i=0; $i<=100; $i= $i+2){
   print "$i, ";

}


   ?>
















   <?php
   print "<p></p>\n";
   print "<p>ejercisio 4</p>\n";

 for($i=1; $i<=100; $i= $i+2){
    print "$i, ";

 }

    ?>







<?php
print "<p></p>\n";
print "<p>ejercisio 5</p>\n";

$resultado = 0;

for($i = 1; $i <= 20; $i++){
$resultado = $resultado + $i;

print "$resultado, ";
}
print "<h3>El resultado es: $resultado</h3>"

?>








<?php
print "<p></p>\n";
print "<p>ejercisio 6</p>\n";

$resultado = 0;

for($i =2; $i <= 20; $i= $i+2){
  

$resultado = $resultado + $i;

print "$resultado, ";
}
print "<h3>El resultado es: $resultado</h3>"

?>


<!--
ejemplo for
<?php
print "cominezo";
for ($i=0; $i <3 ; $i++) {
print "<p>$i</p>\n";
  }
  print "final" ?>; -->
