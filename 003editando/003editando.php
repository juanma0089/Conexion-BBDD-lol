<?php
include_once('../conexion.php');
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
    <div class="container ">
        <form action="../champEditado.php" method="POST">
            <div class="mb-3 mt-3" hidden>
                <label for="id" class="form-label">ID</label>
                <input type="number" disabled   class="form-control" id="id" value="<?= $id ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" value="<?= $nombre ?>">
            </div>
            <div class="mb-3">
                <label for="rol">Rol</label>
                <select class="form-select" aria-label="Default select example" id="rol" name="rol" required>
                    <option <?php if ($rol == 'Asesino') echo 'selected' ?>>Asesino</option>
                    <option <?php if ($rol == 'Luchador') echo 'selected' ?>>Luchador</option>
                    <option <?php if ($rol == 'Mago') echo 'selected' ?>>Mago</option>
                    <option <?php if ($rol == 'Tirador') echo 'selected' ?>>Tirador</option>
                    <option <?php if ($rol == 'Apoyo') echo 'selected' ?>>Apoyo</option>
                    <option <?php if ($rol == 'Tanque') echo 'selected' ?>>Tanque</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="difficulty">Dificultad</label>
                <select class="form-select" aria-label="Default select example" id="difficulty" name="difficulty" required>
                    <option <?php if ($dificultad == 'Baja') echo 'selected' ?>>Baja</option>
                    <option <?php if ($dificultad == 'Moderada') echo 'selected' ?>>Moderada</option>
                    <option <?php if ($dificultad == 'Alta') echo 'selected' ?>>Alta</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" rows="7" value="<?=$descripcion?>" ><?=$descripcion?></textarea>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>   
        </form>    
             
    </div>
</body>
</html>