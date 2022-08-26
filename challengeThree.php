<?php

// ---M U L T I P L I C A T I O N---
$number1 = readline("El número: ");
$numberTo = readline("Multiplicado por: ");
$number2 = 0;

function multiplication ($number1, $number2, $numberTo) {
  for ($count=0; $count < $numberTo; $count++) { 
    $number3 = $number1 + $number2;
    $number2 = $number3;
  }
  echo "\nEs: $number2 \n";
}
multiplication($number1, $number2, $numberTo);

?>