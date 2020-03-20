<?php #
# Перебор ассоциативного массива.
  $birth1 = [
    "Антон Антонович" => "2020-03-11",
    "Сергей Сергеевич"    => "2020-09-02",
  ];
  for (reset($birth1); ($k = key($birth1)); next($birth1))
    echo "$k родился {$birth1[$k]}<br />";

//   current()
//  reset()  key()  next() end() prev()

////код для перебора значений массива не сначала , с конца
//for (end($birth); ($k = key($birth)); prev($birth))
//  echo "$k родился {$birth[$k]}<br>";
?>
