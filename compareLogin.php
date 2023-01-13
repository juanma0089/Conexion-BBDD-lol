<?php
include_once('./conexionPDO.php');

if($_POST){
    $username = $_POST['username'] ?? '';
    $password = $_POST['pass'] ?? '';

    if ($username != "" && $password != "") {

        $sql = "SELECT * FROM `user` WHERE username = ? ";

        $sentencia = connectPDO()->prepare($sql);
        $sentencia->execute([$username]);
        $usuario = $sentencia->fetch();

        if ($usuario && password_verify($password, $usuario['password'])) {
    ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="./css/bootstrap.css" rel="stylesheet">
                <link href="./css/custom.css" rel="stylesheet">
                <script defer src="./js/custom.js"></script>
                <script defer src="./js/bootstrap.bundle.js"></script>
                <title>Nuevo usuario</title>
            </head>

            <body>
                <div class='alert alert-success text-center' role='alert'>
                    <h3>Bienvenido <?= $username ?></h3>
                </div>
            </body>

            </html>

    <?php
            header("refresh:1;url=./003campeones.php");
        } else {
            echo "el usuario no existe";

            header("refresh:3;url=./004login.php?error=true");
        }
    }
}
?>