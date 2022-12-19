<?php 
    include_once('./conexion.php');

    $id = $_POST['id'];
   

        $conexion = connect();
        $consulta = "DELETE FROM `champ` WHERE `id` = '$id' ";
        
        mysqli_query($conexion, $consulta);

        header('Location: 002campeones/002campeones.php');
        
        header('Location: 003editando/003editando.php');
    
    ?>