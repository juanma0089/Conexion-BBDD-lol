<?php

function connect()
{

    $conexion = mysqli_connect("localhost", "root", "", "lol");

    if (mysqli_connect_errno()) {
        echo "Failed to connet to MySQL" . mysqli_connect_error();
        exit();
    }

    return $conexion;
}
?>