<?php

// ---M U L T I P L I C A T I O N---
$number1 = readline("El número: ");
$number2 = readline("Multiplicado por: ");

function multiplication ($number1, $number2) {
  $result = 0;
  
  for ($count=0; $count < $number2; $count++) { 
    $result = $number1 + $result;
  }
  return $result;
}
echo "\nEs: " . multiplication($number1, $number2) . "\n";

?>