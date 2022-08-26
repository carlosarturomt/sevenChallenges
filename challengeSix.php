<?php

// ---O R D E R I N G   A R R A Y---
$array = [13, 14, 94, 33, 82, 25, 59, 94, 65, 23, 45, 27, 73, 25, 39, 10];

function orderingArray($numbers){
  for ($i=1; $i < count($numbers); $i++) { 
    for ($j=0; $j < count($numbers)-$i; $j++) { 
      if ($numbers[$j]>$numbers[$j+1]) {
        $k=$numbers[$j+1];
        $numbers[$j+1]=$numbers[$j];
        $numbers[$j]=$k;
      }
    }
  }
  return $numbers;
}

$order = orderingArray($array);

echo "Los números ya ordenados serían: \n";
for ($i=0; $i < count($order); $i++) { 
  echo "$order[$i] \n";
}

// ---E A S Y   F O R M--- 
// sort($array);
// foreach($array as $number) {
//   echo "$number \n";
// }
