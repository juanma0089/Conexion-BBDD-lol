<?php
include_once('./conexionPDO.php');

$user1 = ['Jon','JonNieve','1234','got@gmail'];
$user2 = ['Thor','MartilloFurioso','4321','mcu@gmail'];
$user3 = ['Tony','theBoss','0000','starkindustries@gmail'];

insertAloBestia($user1);
insertAloBestia($user2);
insertAloBestia($user3);
function insertAloBestia($user){
    $name = $user[0];
    $username = $user[1];
    $password = $user[2];
    $email = $user[3];

    
    $sql = "INSERT INTO `user`(`name`, `username`, `password`, `email`) VALUES (:name, :username, :password, :email)";
    //conectamos a la bbdd
    $insert = connectPDO()->prepare($sql);
    //ejecutamos la inserción de datos a la bbdd
    if (
        $insert->execute([
            'name' => $name,
            'username' => $username,
            //CIFRAMOS EL PASSWORD
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'email' => $email
        ])
    );

}
header("refresh:4;url=http://localhost/Conexion-BBDD-lol");?>

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
        <div class='alert alert-success' role='alert'>
            <h2>Usuarios insertados</h2>
        </div>
</body>
</html>  