<?php #
# Перебор ассоциативного массива.
  $birth2 = [
    "Антон Антонович" => "2020-03-11",
    "Сергей Сергеевич"    => "2020-09-02",
  ];
//  for (reset($birth1); ($k = key($birth1)); next($birth1))
//    echo "$k родился {$birth1[$k]}<br />";

//   current()
//  reset()  key()  next() end() prev()

////код для перебора значений массива не сначала , с конца
//for (end($birth); ($k = key($birth)); prev($birth))
//  echo "$k родился {$birth[$k]}<br>";


//Нулевой ключ

//for (reset($birth1); ($k = key($birth1)); next($birth1))
//  echo "$k родился {$birth1[$k]}<br />";

//for(reset($birth1); ($k = key($birth1)) !== false; next($birth1))
//  echo "$k родился {$birth1[$k]}<br />";


//Прямой перебор массива
//Старый способ перебора
//each()
//for (reset($birth1); list ($k,$a) = each($birth1); /*пустота*/)
//  echo "$k родился $a<br />";



//Перебор циклом foreach
foreach ($birth2 as $k => $a) echo "$k родился $a<br />";

?>
