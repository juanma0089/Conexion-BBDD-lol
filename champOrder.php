<?php 
    include_once('./conexion.php');

    $id = $_POST['id'];
    

    $roles = ["Asesino", 'Luchador', "Mago", "Tirador", "Apoyo", "Tanque"];
    $dificultades = ["Baja", "Moderada", "Alta"];


    if($id != '' && is_numeric($id) && $nombre != '' & is_string($nombre) && in_array($rol, $roles) && in_array($dificultad, $dificultades)){
        $conexion = connect();
        $consulta = "UPDATE `champ` SET `name` = '$nombre', `rol` = '$rol', `difficulty` = '$dificultad', `description` ='$descripcion'  WHERE `id` = '$id';";
        
        $campEdit = mysqli_query($conexion, $consulta);

        header('Location: 002campeones.php');
        
    } else {
        header('Location: 003editando.php?id='.$id);
    }
    
    
    ?>   
