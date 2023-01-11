<?php
include_once './conexion.php';?>

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

   
 
    $orden = $_GET['value'];
    $col = $_GET['col'];
    $consulta = ""; 
    
    echo $consulta;
    if ($orden == 'asc' || $orden == 'desc') {
        $conexion = connect();
        $consulta = "SELECT * FROM `champ` ORDER BY $col $orden";


        $listCampeones = mysqli_query($conexion, $consulta);
       
        if ($listCampeones) {
    ?>

            <table class='table text-center container'>
                <thead>
                    <tr>
                        <th scope='col'>
                            <a href='champOrder.php?value=asc&col=id' class='text-decoration-none'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-chevron-up' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd' d='M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z'/>
                                </svg>
                            <a href='champOrder.php?value=desc&col=id' class='text-decoration-none'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-chevron-down' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/>
                                </svg>
                            </a>
                            ID
                        </th>
                        <th scope='col'>
                            <a href='champOrder.php?value=asc&col=name' class='text-decoration-none'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-chevron-up' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd' d='M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z'/>
                                </svg>
                            <a href='champOrder.php?value=desc&col=name' class='text-decoration-none'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-chevron-down' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/>
                                </svg>
                            </a>
                            Nombre
                        </th>
                        <th scope='col'>
                            <a href='champOrder.php?value=asc&col=rol' class='text-decoration-none'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-chevron-up' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd' d='M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z'/>
                                </svg>
                            <a href='champOrder.php?value=desc&col=rol' class='text-decoration-none'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-chevron-down' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/>
                                </svg>
                            </a>
                            Rol
                        </th>
                        <th scope='col'>
                            <a href='champOrder.php?col=difficulty&value=asc' class='text-decoration-none'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-chevron-up' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd' d='M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z'/>
                                </svg>
                            <a href='champOrder.php?value=desc&col=difficulty' class='text-decoration-none'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-chevron-down' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/>
                                </svg>
                            </a>
                            Dificultad
                        </th>
                        <th scope='col' class='col-6'>descripción</th>
                    </tr>
                </thead>
        <?php        
            foreach ($listCampeones as $campeon) {

                echo 
                    "<tbody>
                        <tr>
                            <th scope='row'>$campeon[id]</th>
                            <td>$campeon[name]</td>
                            <td>$campeon[rol]</td>
                            <td>$campeon[difficulty]</td>
                            <td>$campeon[description]</td>
                        </tr>
                    </tbody>
                    ";
            }
            echo "</table>";
        } else {
            echo "No vayas de hacker y vuelve atr";
        }
    }
    ?>
    
</body>
</html>