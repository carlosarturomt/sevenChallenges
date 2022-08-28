<?php

$m1 = [
  [2, 0, 1],
  [3, 0, 0],
  [5, 1, 1]
];

$m2 = [
  [1, 0, 1],
  [1, 2, 1],
  [1, 1, 0]
];

$m3 = [
  [7, -5, 2],
  [4, -2, 2],
  [1, -4, 2]
];

function sum($m, $n)
{
  $result = [];
  for ($i = 0; $i < count($m); $i++) {
    for ($j = 0; $j < count($m); $j++) {
      $result[$i][$j] = $m[$i][$j] + $n[$i][$j];
    }
  }
  return $result;
}

function multiplication($m, $n)
{
  $result = [];
  for ($i = 0; $i < count($m); $i++) {
    for ($j = 0; $j < count($n[0]); $j++) {
      for ($k = 0; $k < count($m[0]); $k++) {
        $result[$i][$j] += $m[$i][$k] * $n[$k][$j];
      }
    }
  }
  return $result;
}

function subtraction($m, $n)
{
  $result = [];
  for ($i = 0; $i < count($m); $i++) {
    for ($j = 0; $j < count($m); $j++) {
      $result[$i][$j] = $m[$i][$j] -= $n[$i][$j];
    }
  }
  return $result;
}

function division($m)
{
  $result = [];
  for ($i = 0; $i < count($m); $i++) {
    for ($j = 0; $j < count($m); $j++) {
      $result[$i][$j] = $m[$i][$j] /= 2;
    }
  }
  return $result;
}

// (A*B) + C =
// print_r(multiplication($m1, $m2));
// print_r($m3);
print_r(sum((multiplication($m1, $m2)), $m3));

// (C/2)*B-A =
// print_r(division($m3));
// print_r(subtraction($m2, $m1));
print_r(multiplication((division($m3)), subtraction($m2, $m1)));

// (A+B)-C =
// print_r(sum($m1, $m2));
// print_r($m3);
print_r(subtraction((sum($m1, $m2)), $m3));
