<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra Gaming</title>
    <link rel="icon" href="imagenes/icono.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="estilos/estilos.css" rel="stylesheet">
</head>

<body>

    <header data-bs-theme="dark">

        <div class="navbar bg-primary navbar-dark navbar-expand-lg bg-dark " data-bs-theme="dark">
            <div class="container">
                <a href="index.php" class="navbar-brand d-flex align-items-center">
                     <strong>Ultra Gaming store</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" collapse navbar-collapse" id="navbarHeader">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active"> Catalogo </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active"> Contacto </a>
                        </li>
                    </ul>

                    <a href="checkout.php" class="btn btn-secondary position-relative me-5">
                        Carrito
                        <span id="num_cart" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            0
                            <span class="visually-hidden"></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    
    <main class="form-login m-auto pt-4" style="max-width: 350px">
        <h2 style="text-align: center;">Iniciar sesion</h2>
        <br>
        <form class="row g-3" action="login.php" method="post" autocomplete="off">
            <div class="form-floating">
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" required>
                <label style="text-align: center;" for="usuario">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                <label for="password">Contraseña</label>
            </div>
            <div class="d-grid gap-3 col-12">
                <button type="submit" class="btn btn-primary" value="Enviar" name="Enviar">Ingresar</button>
            </div>
            <hr>
            <div class="col-12">
                ¿No tiene cuenta? <a href="registro.php">Registrate aqui</a>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
