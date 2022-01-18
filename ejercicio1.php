<?php
$saludo = 'Hello, wonderful world!';

$registrado = FALSE;

if(!$registrado){
  print('No tienes acceso');
}

$num = 5;

$cadena= 'Mundo';

$s1 = <<<ETIQUETA
  Hola $cadena (con análisis)
ETIQUETA;

$s2 = <<<'ETIQUETA'
  Hola $cadena (con análisis)
ETIQUETA;
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

    <h1><?php print($saludo)?></h1> <!-- Hello, wonderful world! -->

 <!-- PREGUNTAR  EN CLASE POR EL . ANTES DE NUM -->

  <p><?php print('$num vale: ' .$num) ?></p> <!-- 5 -->
  <p><?php print('$num vale: ' .$num++) ?></p> <!-- 5 -->
  <p><?php print('$num vale: ' .$num) ?></p> <!-- 6 -->
  <p><?php print('$num vale: ' .++$num) ?></p> <!-- 7 -->

  <h1><?php print($s1)?></h1> <!-- Hola Mundo (con análisis) -->
  <h1><?php print($s2)?></h1> <!-- Hola $cadena (con análisis) -->

 

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
