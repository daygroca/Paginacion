<?php

$lista_carrito = array();

$productos = array(
    array("idproducto" => 1, "nombreproducto" => "Producto 1", "precio" => 100, "descuento" => 10, "cantidad" => 2, "stock" => 5),
    array("idproducto" => 2, "nombreproducto" => "Producto 2", "precio" => 200, "descuento" => 5, "cantidad" => 1, "stock" => 10)
);

if ($productos != null) {
    $lista_carrito = $productos;
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
                            <a href="#" class="nav-link active"> Catalogo </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active"> Contacto </a>
                        </li>
                    </ul>

                    <a href="checkout.php" class="btn btn-secondary position-relative me-5">
                        Carrito
                        <span id="num_cart" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        <?php echo count($lista_carrito); ?>
                            <span class="visually-hidden"></span>
                        </span>
                    </a>
                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <a href="#" class="btn btn-success me-2"><?php echo $_SESSION['user_name']; ?></a>
                        <a href="cerrar_sesion.php" class="btn btn-primary">Cerrar sesión</a>
                    <?php } else { ?>
                        <a href="login.php" class="btn btn-success">Ingresar</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($lista_carrito == null) {
                            echo '<tr> <td colspan="5" class="text-center"><b>Carrito vacio siga navegando para seleccionar sus productos</b></td></tr>';
                        } else {
                            $total = 0;

                            foreach ($lista_carrito as $producto) {
                                $_id = $producto['idproducto'];
                                $nombre = $producto['nombreproducto'];
                                $precio = $producto['precio'];
                                $descuento = $producto['descuento'];
                                $cantidad = $producto['cantidad'];
                                $stock = (int)$producto['stock'];
                                $precio_desc = $precio - (($precio * $descuento) / 100);
                                $subtotal = $cantidad * $precio_desc;
                                $total += $subtotal;
                        ?>
                                <tr>
                                    <td><?php echo $nombre; ?></td>
                                    <td><?php echo 'C$' . number_format($precio_desc, 2, '.', ','); ?></td>
                                    <td>
                                        <input type="number" value="<?php echo $cantidad; ?>" size="5" id="cantidad_<?php echo $_id; ?>" onkeydown="return true;" onmousedown="return true;" onwheel="return true;" onchange="actualizaCantidad(this.value > 1 ? this.value : 1, <?php echo $_id; ?>)">
                                    </td>
                                    <td>
                                        <div id="subtotal_<?php echo $_id; ?>" name="subtotal[]"><?php echo 'C$' . number_format($subtotal, 2, '.', ','); ?></div>
                                    </td>
                                    <td>
                                        <a href="#" id="eliminar" class="btn btn-warning btn-sm" data-bs-id="<?php echo $_id; ?>" data-bs-toggle="modal" data-bs-target="#eliminaModal">Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="3"></td>
                                <td colspan="2">
                                    <p class="h3" id="total"><?php echo 'Grand Total: ' . 'C$'. number_format($total, 2, '.', ','); ?></p>
                                </td>
                            </tr>
                    </tbody>
                <?php }
                ?>
                </table>
            </div>
            <?php
            if ($lista_carrito != null) { ?>
                <div class="row">
                    <div class="col-md-5 offset-md-7 d-grid gap-2">
                        <a href="#" class="btn btn-primary btn-lg">Realizar pago </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
    <div class="modal" tabindex="-1" id="eliminaModal">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Alerta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Desea eliminar el producto de la lista?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button id="btn-elimina" type="button" class="btn btn-danger" onclick="eliminar()">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        let eliminaModal = document.getElementById('eliminaModal')
        eliminaModal.addEventListener('show.bs.modal', function(event) {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')
            let buttoElimina = eliminaModal.querySelector('.modal-footer #btn-elimina')
            buttoElimina.value = id
        })

        
    </script>
</body>

</html>
