
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
    <title>Login</title>
</head>
<body>
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4 p-5 shadow-sm border rounded-3">
                <h2 class="text-center mb-4 text-primary">Login</h2>
                <form action="compareLogin.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputUSername1" for="username" class="form-label">Username</label>
                        <input type="username" name="username" class="form-control border border-primary <?php if ($GET) echo "border-ganger"?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" for="password" class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control border border-primary <?php if ($GET) echo "border-ganger"?>" id="exampleInputPassword1">
                    </div>
                    <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
                <div class="mt-3">
                    <p class="mb-0  text-center">¿No estás registrado? <a href="005registro.php"
                            class="text-primary fw-bold">Regístarte</a></p>
                </div>
            </div>
        </div>
    </body>

</html>