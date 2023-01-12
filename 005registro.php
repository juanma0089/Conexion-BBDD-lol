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
    <title>Registro</title>
</head>

<body>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-3 p-5 shadow-sm border rounded-3">
            <h2 class="text-center mb-4 text-primary">Registro</h2>
            <form class="row g-3 d-flex justify-content-center align-items-center" action="006nuevoUsuario.php" method="POST">
                <div class="col-md-7">
                    <label for="validationDefault01" class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control" id="validationDefault01" value="" required>
                </div>
                <div class="col-md-7">
                    <label for="validationDefaultUsername" class="form-label">Nombre usuario</label>
                    <div class="input-group">
                        <input type="text" name="username" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-7">
                    <label for="validationDefaultPassword" class="form-label">Contraseña</label>
                    <input type="password" name="pass" class="form-control" id="validationDefaultPassword" required>
                </div>
                <div class="col-md-7">
                    <label for="validationDefaultEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="validationDefaultEmail" required>
                </div>
                <div class="col-6 d-flex d-flex justify-content-center align-items-center">
                    <button class="btn btn-primary" type="submit">Crear usuario</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>