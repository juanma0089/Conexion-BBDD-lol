
    <?php 
    include_once('./conexion.php');

    $id = $_POST['id'];
    $nombre = $_POST['name'];
    $rol = $_POST['rol'];
    $dificultad = $_POST['difficulty'];
    $descripcion = $_POST['description'];

    $dificultades = ["Asesino", "Luchador", "Mago", "Tirador", "Apoyo", "Tanque"];
    $roles = ["Baja", "Moderada", "Alta"];

    if($nombre != "" && $descripcion != "" && $dificultad == in_array($dificultad, $dificultades) && $descripcion == in_array($descripcion, $dificultades)){
        $conexion = connect();
        $consulta = "UPDATE `champ` SET `name` = '$nombre', `rol` = '$rol', `difficulty` = '$dificultad', `description` ='$descripcion'  WHERE `id` = '$id' ";
        
        $campEdit = mysqli_query($conexion, $consulta);

        header('Location: ./003editando.php');
        
        //?16/12/2022 clase commit
        //*redireccionar a formulario con los datos actualizado
    }

    
    ?>   
