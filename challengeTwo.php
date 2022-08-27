<?php

// ---R E S O L V I N G   M A T R I X---
$a[0][0] = 1;
$a[0][1] = 2;

$a[1][0] = 3;
$a[1][1] = 4;

$a[2][0] = 5;
$a[2][1] = 6;


$b[0][0] = 7;
$b[0][1] = 8;

$b[1][0] = 9;
$b[1][1] = 10;

$b[2][0] = 11;
$b[2][1] = 12;


$c[0][0] = -3;
$c[0][1] = 0;

$c[1][0] = 2;
$c[1][1] = 5;

$c[2][0] = 8;
$c[2][1] = -7;
// print_r($a);

function matrixSum($n)
{
  $sum = 0;
  for ($i = 0; $i <= 2; $i++) {
    for ($j = 0; $j <= 1; $j++) {
      $sum += $n[$i][$j];
    }
  }
  return $sum;
}
// echo matrixSum($a) . "\n";

function matrixSubtraction($n)
{
  $subtraction = 0;
  for ($i = 0; $i <= 2; $i++) {
    for ($j = 0; $j <= 1; $j++) {
      $subtraction -= $n[$i][$j];
    }
  }
  return $subtraction;
}
// echo matrixSubtraction($n) . "\n";

function matrixMultiplication($n)
{
  $multiplication = 1;
  for ($i = 0; $i <= 2; $i++) {
    for ($j = 0; $j <= 1; $j++) {
      $multiplication *= $n[$i][$j];
    }
  }
  return $multiplication;
}
// echo matrixMultiplication($n). "\n";

// (A*B)+C;
echo "'A' es igual a: ";
print_r($a);
echo "'B' es igual a: ";
print_r($b);
echo "'C' es igual a: ";
print_r($c);
echo "La suma de los valores de 'A' es: " . matrixSum($a) . "\n";
echo "La suma de los valores de 'B' es: " . matrixSum($b) . "\n";
echo "La suma de los valores de 'C' es: " . matrixSum($c) . "\n";
echo "(A*B)+C = " . matrixSum($a) * matrixSum($b) + matrixSum($c) . "\n";
