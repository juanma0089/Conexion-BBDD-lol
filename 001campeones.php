<?php
include_once('./conexion.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/custom.css" rel="stylesheet">
    <script defer src="./js/bootstrap.bundle.js"></script>
    <title>Campeones lol</title>
</head>
<body>
    <?php
    $conexion = connect();
    $consulta = "SELECT * FROM `champ`";
    $listCampeones = mysqli_query($conexion, $consulta);
    
    if($listCampeones) {

        foreach($listCampeones as $campeon){

            echo "<br><b>Identificador: </b> $campeon[id]
                <br><b>Nombre: </b> $campeon[name]
                <br><b>Rol:</b> $campeon[rol]
                <br><b>Dificultad:</b> $campeon[difficulty]
                <br><b>Descripción:</b> $campeon[description]<br>
            ";
        }
    }

    ?>
</body>
</html>