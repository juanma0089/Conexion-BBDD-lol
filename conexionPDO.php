<?php
include_once('./credencialesBBDD.php');

function connectPDO(){

    try {
        $conexion = new PDO(DSN, USER, PASSWORD);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "te has conectado al a bbdd de lol";

    } catch (PDOException $e) {
        echo "Falló la conexión " . $e->getMessage();
    }
}
?>

