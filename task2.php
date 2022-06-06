<?php
$vat = 15 ;
$price = 500 ;
 $totalvat = ($price/100)*$vat;
 echo "total vat of the bill is :".$totalvat."\n";
 $totalbill = $price + $totalvat;
 echo "\n"."Total bill:";
 echo number_format($totalbill,2);
?>