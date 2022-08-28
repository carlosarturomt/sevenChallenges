<?php

// ---N U M B E R   O F   R E P E T I T I O N S---
$string = "Hola hola Adios, adios ADIOS HolA php .";
echo "\n $string \n\n";
$word = readline('Escribe una palabra en minúsculas para ver cuántas veces se repite ésta en el texto mostrado: ');

function challengeFour($string, $valor)
{
  $array = explode(' ', strtolower($string));
  $valor = strtolower($valor);
  $sum = 0;
  // var_dump($array);
  foreach ($array as $value) {
    if ($value == $valor) {
      $sum++;
    }
  }
  return $sum;
}
$result = challengeFour($string, $word);
echo "Tu palabra se repite $result veces.\n";


// ---E A S Y   F O R M--- 
// $array = explode(' ', strtolower($string));
// print_r(array_count_values($array));
