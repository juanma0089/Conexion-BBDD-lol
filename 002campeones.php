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
    <script defer src="./js/custom.js"></script>
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
           echo "<div class='container-fluid'>
            <div class='col-4 pt-2'>
            <a href='003editando.php?id=$campeon[id]' class='btn btn-primary' role='button'>Editar</a>
            <button type='button' data-bs-toggle='modal' data-bs-target='#modal$campeon[id]' class='btn btn-primary' role='button'>Borrar</button>    
            </div>
            </div>
            
            
            <!-- Modal -->
            <div class='modal fade' id='modal$campeon[id]' tabindex='-1' aria-labelledby='modalLabel' aria-hidden='true'>
              <div class='modal-dialog'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='modalLabel'>Confirmar borrado</h5>
                    </button>
                  </div>
                  <div class='modal-body'>
                    ¿Está seguro de que quiere borrar al campeón $campeon[name]?
                  </div>
                  <div class='modal-footer'>
                  <a href='champBorrado.php?id=$campeon[id]'><button type='button' class='btn btn-primary'>Confirmar</button></a>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                  </div> 
                </div>
              </div>
            </div>
            ";

        }
    }
    ?>
    
</body>
</html>