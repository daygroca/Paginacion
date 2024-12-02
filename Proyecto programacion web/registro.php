<?php
$erros = [];

if (!empty($_POST)) {
    $pnombre = trim($_POST['pnombre']);
    $snombre = trim($_POST['snombre']);
    $papellido = trim($_POST['papellido']);
    $sapellido = trim($_POST['sapellido']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);
    $cedula = trim($_POST['cedula']);
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['contrasena']);
    $repassword = trim($_POST['repassword']);

    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra Gaming</title>
    <link rel="icon" href="imagenes/icono.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="css/estilos.css" rel="stylesheet">
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
                            <a href="#" class="nav-link active"> Catálogo </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active"> Contacto </a>
                        </li>
                    </ul>

                    <a href="checkout.php" class="btn btn-secondary position-relative me-5">
                        Carrito
                        <span id="num_cart" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            
                            <span class="visually-hidden"></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Datos del cliente </h2>
            
            <form class="row g-3" action="registro.php" method="POST" autocomplete="off">
                <div class="col-md-6">
                    <label for="pnombre"><span class="text-danger">*</span>Primer nombre</label>
                    <input type="text" name="pnombre" id="pnombre" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="papellido"><span class="text-danger">*</span>Segundo nombre</label>
                    <input type="text" name="papellido" id="papellido" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="snombre"><span class="text-danger">*</span>Primer apellido</label>
                    <input type="text" name="snombre" id="snombre" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="sapellido"><span class="text-danger"></span>Segundo apellido</label>
                    <input type="text" name="sapellido" id="sapellido" class="form-control">
                </div>
                <p id="nombre-apellido-error" class="text-danger"></p>

                <div class="col-md-6">
                    <label for="email"><span class="text-danger">*</span>Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                    <span id="validaEmailError" class="text-danger"></span>
                </div>

                <div class="col-md-6">
                    <label for="telefono"><span class="text-danger">*</span>Teléfono</label>
                    <input type="tel" name="telefono" id="telefono" class="form-control" required>
                    <p id="error-telefono" class="text-danger"></p>
                </div>
                <div class="col-md-6">
                    <label for="cedula"><span class="text-danger">*</span>Cédula</label>
                    <input type="text" name="cedula" id="cedula" class="form-control" required>
                    <p id="error-message" class="text-danger"></p>
                </div>
                <div class="col-md-6">
                    <label for="usuario"><span class="text-danger">*</span>Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" required>
                    <span id="validaUsuario" class="text-danger"></span>
                </div>
                <div class="col-md-6">
                    <label for="contrasena"><span class="text-danger">*</span>Contraseña</label>
                    <input type="password" name="contrasena" id="contrasena" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="repassword"><span class="text-danger">*</span>Repetir contraseña</label>
                    <input type="password" name="repassword" id="repassword" class="form-control" required>
                    <p id="password-error" class="text-danger"></p>
                </div>
                <i><b>Nota:</b> Los campos con asteriscos son obligatorios</i>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        var pnombreInput = document.getElementById('pnombre');
        var papellidoInput = document.getElementById('papellido');
        var snombreInput = document.getElementById('snombre');
        var sapellidoInput = document.getElementById('sapellido');
        var mensajeError = document.getElementById('nombre-apellido-error');

        pnombreInput.addEventListener('input', validarNombreApellido);
        papellidoInput.addEventListener('input', validarNombreApellido);
        snombreInput.addEventListener('input', validarNombreApellido);
        sapellidoInput.addEventListener('input', validarNombreApellido);

        function validarNombreApellido() {
            var pnombre = pnombreInput.value;
            var papellido = papellidoInput.value;
            var snombre = snombreInput.value;
            var sapellido = sapellidoInput.value;

            var formatoNombreApellido = /^[A-Za-z\s]+$/;

            if (!formatoNombreApellido.test(pnombre) || !formatoNombreApellido.test(papellido) || !formatoNombreApellido.test(snombre) || (sapellido !== "" && !formatoNombreApellido.test(sapellido))) {
                mensajeError.textContent = 'Los nombres y apellidos no son válidos';
            } else {
                mensajeError.textContent = '';
            }
        }

        document.getElementById('email').addEventListener('input', function() {
            const email = this.value;
            const emailError = document.getElementById('validaEmailError');
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            if (!emailPattern.test(email)) {
                emailError.textContent = 'Por favor ingresa un correo válido';
            } else {
                emailError.textContent = '';
            }
        });

        document.getElementById('usuario').addEventListener('input', function() {
            const usuario = this.value;
            const usuarioError = document.getElementById('validaUsuario');
            const usuarioPattern = /^[a-zA-Z0-9]+$/;

            if (!usuarioPattern.test(usuario)) {
                usuarioError.textContent = 'Usuario solo puede contener letras y números';
            } else {
                usuarioError.textContent = '';
            }
        });
    </script>

</body>

</html>

