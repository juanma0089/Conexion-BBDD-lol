<?php
// recogemos por GET el id
$id = $_GET['id'];

$conexion = connect();
    $consulta = "SELECT * FROM `champ` WHERE `id` = $id";
    $listCampeones = mysqli_query($conexion, $consulta);

if ($listCampeones) {

    foreach ($listCampeones as $campeon) {

        $nombre = $campeon["name"];
        $rol = $campeon["rol"];
        $dificultad = $campeon["difficulty"];
        $descripcion = $campeon["description"];
    }
}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <script defer src="../js/bootstrap.bundle.js"></script>
    <title>Editar Campeones</title>
</head>
<body>
    
</body>
</html>