<?php 
    include_once('./conexion.php');

    $id = $_GET['id'];
   

    if ($id != null){
        $conexion = connect();
        $consulta = "DELETE FROM `champ` WHERE `id` = '$id';";
        
        $ChampBorrado = mysqli_query($conexion, $consulta);

        header('Location: 002campeones.php'); 
    }
     
    ?>