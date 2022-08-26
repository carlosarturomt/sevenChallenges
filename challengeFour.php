<?php

// ---N U M B E R   O F   R E P E T I T I O N S---
$string = "Crea una función que calcule la cantidad de veces que se repite una palabra que
recibe como parámetro. Escribe el resultado en la consola .";
echo "\n $string \n\n";
$word = readline('Escribe una palabra para ver cuántas veces se repite ésta en el texto mostado: ');

function challengeFour($string, $valor) {

  $array = explode(' ', strtolower($string));
  // var_dump($array);
  $suma = 0;

  if (is_array($array) && $valor) {
    foreach ($array as $value) {
      if ($value == $valor) {
        $suma++;
      }
    }
  }
  echo "Tu palabra se repite $suma veces.\n";
}
challengeFour($string, $word);


// ---E A S Y   F O R M--- 
// $array = explode(' ', strtolower($string));
// print_r(array_count_values($array));

?>