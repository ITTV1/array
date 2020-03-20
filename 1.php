<?php
//Конструкция list()
$html[0] = "Антон Антонович Антонов";
$html[1] = "Сергей Сергеевич Сергеев";
$html[2] = "Дмитрий Дмитриевич Дмитриев";


$html[0] = "Антон ";
$html[1] = "Антонович";
$html[2] = "1";
$name = $html[0];
$surname = $html[1];
$age = $html[2];

//var_dump(list ($name, $surname, $age) = $html);
//list ($name, $surname, $age) = $html;

list (, $surname, $age) = $html;
print_r(list (, $surname, $age) = $html);
?>


