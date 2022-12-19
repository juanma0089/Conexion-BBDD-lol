
    <?php 
    include_once('./conexion.php');

    $id = $_POST['id'];
    $nombre = $_POST['name'];
    $rol = $_POST['rol'];
    $dificultad = $_POST['difficulty'];
    $descripcion = $_POST['description'];

    $roles = ["Asesino", 'Luchador', "Mago", "Tirador", "Apoyo", "Tanque"];
    $dificultades = ["Baja", "Moderada", "Alta"];


    if($id != '' && is_numeric($id) && $nombre != '' & is_string($nombre) && in_array($rol, $roles) && in_array($dificultad, $dificultades)){
        $conexion = connect();
        $consulta = "UPDATE `champ` SET `name` = '$nombre', `rol` = '$rol', `difficulty` = '$dificultad', `description` ='$descripcion'  WHERE `id` = '$id' ";
        
        $campEdit = mysqli_query($conexion, $consulta);

        header('Location: ./002campeones.php');
        
        //?16/12/2022 clase commit
        //*redireccionar a formulario con los datos actualizado
    } else {
        header('Location: ./003editando.php?id='.$id);
    }
    
    
    ?>   
