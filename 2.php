<?php
//Слияние массивов
//$html[0] = "Антон Антонович Антонов";
//$html[1] = "Сергей Сергеевич Сергеев";
//$html[2] = "Дмитрий Дмитриевич Дмитриев";
//+
$php = ["Антон"=>"Антонович ", "Сергей"=>"Сергеевич"];
$b = ["Дмитрий"=>"Дмитриевич", "Роман"=>"Романович"];
 $all = $php + $b;
//print_r($all);
var_dump($all);
$all1 = $b + $php ;

print_r($all1);

?>

