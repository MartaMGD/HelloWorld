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
    <div class="jumbotron mb-2">
        <div class="container">
            <!-- aquí  tu código -->
        </div>
    </div>
    <div class="jumbotron mb-2">
        <div class="container">
            <!-- aquí  tu código -->
        </div>
    </div>
    <h2><?php echo "Ejercicio 2" ?></h2>
    <p><?php echo "<b>1. Crear un directorio login, con un archivo index.php cuyo contenido será el de la imagen. <br>
                        2. El formulario se enviará al archivo access_control.php <br>
                        3. Este archivo comprobará que la información enviada se encuentra dentro del siguiente array.</b>"; ?></p>
    <div>
        <form class="mb-3" action="access_control.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input name="checkbox" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>