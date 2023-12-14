<?php
$stock = array("poma" => "9", "taronja" => "25" , "llimona" => "5", "pera" => "8", "plàtan" => "12", "pinya" => "3", "meló" => "4", "síndria" => "5", "albercoc" => "7", "maduixa" => "14");
$fruites = array("mango" => "10", "meló" => "4" , "maduixa" => "14", "kiwi" => "6");

$stock["mango"]=10;

$diff =  array_diff($stock, $fruites);
$inter =  array_intersect($stock, $fruites);
$merge =  array_merge($stock, $fruites);

print_r($diff);
echo "<br>";
print_r($inter);
echo "<br>";
print_r($merge);

?>
