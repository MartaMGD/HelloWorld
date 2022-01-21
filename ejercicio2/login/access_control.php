<?php
// print_r($_POST);

$encontrado = false;

$datos = array(
    0 =>
    array(
        0 => 'tbedell0@wikimedia.org',
        1 => 'Qwlff8f',
    ),
    1 =>
    array(
        0 => 'arawling1@uiuc.edu',
        1 => 'l7BneiS',
    ),
    2 =>
    array(
        0 => 'lbuey2@nba.com',
        1 => 'Z2cx1Pk1p8Q',
    ),
    3 =>
    array(
        0 =>
        'scullum3@washington.edu',
        1 => 'qwmqVzE',
    ),
    4 =>
    array(
        0 => 'lokeshott4@overblog.com',
        1 => 'NoVinh',
    ),
);

for ($i = 0; $i < sizeof($datos); $i++) {
    if ($_POST['email'] === $datos[$i][0] && $_POST['password'] === $datos[$i][1]) {
        $encontrado = true;
        print 'Encontrado';
        break;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ejercicio 2</title>
</head>

<body>
    <div class="container-fluid bg-light mx-3 my-3">
        <?php
        if ($encontrado === true) {
            echo '<div class="alert alert-primary" role="alert">
            Success! Access granted.
            </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
            Forbidden, restricted area!
            </div>';

            echo '<a href="index.php" class="link link-dark">Back to login</a>';
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>