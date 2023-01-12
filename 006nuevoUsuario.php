<?php
include_once('./conexionPDO.php');

$name = $_POST['name'] ?? '';
$username = $_POST['username'] ?? '';
$password = $_POST['pass'] ?? '';
$email = $_POST['email'] ?? '';



// Comprobamos con isset que los datos que nos llega no sea nulo y luego que no esté vacío
try {
    if ($name != "" && $username != "" && $password != "" && $email != "") {

        $sql = "INSERT INTO `user`(`name`, `username`, `password`, `email`) VALUES (:name, :username, :password, :email)";
        //conectamos a la bbdd
        $insert = connectPDO()->prepare($sql);
        //ejecutamos la inserción de datos a la bbdd
        if ($insert->execute([
            'name' => $name,
            'username' => $username,
            //CIFRAMOS EL PASSWORD
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'email' => $email
        ])) {
            //añadimos un delay de 3 segundos antes de redireccionar
            header("refresh:4;url=./004login.php");
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
                    <h3>El usuario <?= $username ?> ha sido introducido en el sistema con la contraseña <?= $password ?></h3>
                </div>
            </body>

            </html>

<?php }
    } else {
        header("refresh:3;url=./005registro.php?error=true");
    }
} catch (PDOException $e) {
    echo 'Fallo en con la base de datos<br>' . $e->getMessage();
    //redirecciono al registro de nuevo
    header("refresh:3;url=./005registro.php?error=true");
}
?>