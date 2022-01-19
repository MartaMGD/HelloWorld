<?php


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>

  <h2><?php echo "Ejercicio 1" ?></h2>
  <p><?php echo "<b>1. Escribir un programa que muestre el nombre del día de la semana según el número de día. Además nos dirá si es fin de semana (sábado y domingo).</b>"; ?></p>
  <?php
  $dayname = date("D");

  echo '<b>La fecha actual es: </b>' . date("j / m / Y") . "<br>";
  echo "<b>Hoy es: </b>" . $dayname . "<br>";

  if ($dayname === "Fri" || $dayname === "Sat" || $dayname === "Sun") {
    echo 'Es fin de semana';
  } else {
    echo 'No es fin de semana';
  }
  ?>

  <p><?php echo "<br>";
      echo '<b>2. Escribir un programa que nos diga si un año es bisiesto.</b>'; ?></p>
  <?php
  $year = 2022;
  echo '<b>El año es:</b> ' . $year;

  echo "<br>";

  if ($year % 4 === 0) {
    echo 'El año es bisiesto';
  } else if ($year % 4 === 0 && $year % 400 === 0) {
    echo 'Es año secular';
  } else {
    echo 'No es año bisiesto ni secular';
  }

  ?>

  <p><?php echo "<br>";
      echo '<b>3. Escribir un programa que nos diga el nombre del mes según el número de mes y además nos diga cuántos días tiene ese mes.</b>'; ?></p>
  <?php
  echo 'El mes es: ' . $month = 6 . ", ";

  switch ($month) {
    case 1:
      echo "Enero";
      break;
    case 2:
      echo "Febrero";
      break;
    case 3:
      echo "Marzo";
      break;
    case 4:
      echo "Abril";
      break;
    case 5:
      echo "Mayo";
      break;
    case 6:
      echo "Junio";
      break;
    case 7:
      echo "Julio";
      break;
    case 8:
      echo "Agosto";
      break;
    case 9:
      echo "Septiembre";
      break;
    case 10:
      echo "Octubre";
      break;
    case 11:
      echo "Noviembre";
      break;
    case 12:
      echo "Diciembre";
      break;
  }

  ?>

  <p><?php echo "<br>";
      echo '<b>4. Escribir un programa que calcule el promedio de 4 notas: 55, 71, 46, 87 y nos diga si el promedio es matrícula, aprobado o suspenso.</b>'; ?></p>
  <?php

  function averageMarks($number1, $number2, $number3, $number4)
  {
    echo ($number1 + $number2 + $number3 + $number4) / 4;
  }

  $finalMark = averageMarks(55, 71, 46, 87);
  echo $finalMark;
  echo "<br>";

  if ($finalMark >= 90) {
    echo 'La nota es un sobresaliente';
  } else if ($finalMark < 90 && $finalMark >= 50) {
    echo 'La nota es un aprobado';
  } else {
    echo 'Estás suspenso';
  }

  ?>

  <p><?php echo "<br>";
      echo '<b>5. Escribir un programa que dada una temperatura en Celsius o Fahrenheit la convierta a la otra escala.</b>'; ?></p>
  <?php

  ?>




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>