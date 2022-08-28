<?php

// ---I N V E R T E D   S T R I N G---
$string = readline("Nombre completo: ");

function challengeFive($string) {
  $array = str_split($string, 1);
  // print_r($array);
  for ($i=count($array)-1; $i >= 0; $i--) { 
    echo "$array[$i]";
  }
  echo "\n";
}
challengeFive($string);

// ---E A S Y   F O R M--- 
// $output = strrev($string);
// echo "$output \n";

?>