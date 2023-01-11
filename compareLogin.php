<?php
include_once('./conexionPDO.php');


$username = $_POST['username'];

if ($username != "") {
   
    $sql = "SELECT * FROM `user` WHERE username = ? ";
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute([$username]);

    $usuario = $sentencia->fetch();

    if ($usuario && password_verify($_POST['pass'], $usuario['password'] )) {
        echo "usuario logueado";
    }else{
        echo "el usuario no existe";
    }
}
?>