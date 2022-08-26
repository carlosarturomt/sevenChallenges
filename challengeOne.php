<?php

// ---D A Y   O F   D A T E---
$setDate = readline("Escribe una fecha, por ejemplo: 20/08/2021: ");
$calculateDay = date_create_from_format('d/m/Y', $setDate);
$day = date_format($calculateDay, 'l');
// echo "$day \n";

switch ($day) {
  case "Sunday":
    echo "Domingo \n";
    break;
  case "Monday":
    echo "Lunes \n";
    break;
  case "Tuesday":
    echo "Martes \n";
  case "Wednesday":
    echo "Miércoles \n";
    break;
  case "Thursday":
    echo "Jueves \n";
    break;
  case "Friday":
    echo "Viernes \n";
    break;
  case "Saturday":
    echo "Sábado \n";
    break;
};

?>