<?php
$productos_descuento = [
    [
        'id' => 1,
        'nombre' => 'Teclado Gaming RGB',
        'precio' => 100,
        'descuento' => 20,
        'descripcion' => 'Teclado mecánico retroiluminado ideal para gaming.',
        'stock' => 10
    ],
    [
        'id' => 2,
        'nombre' => 'Ratón Gaming Inalámbrico',
        'precio' => 50,
        'descuento' => 15,
        'descripcion' => 'Ratón con alta precisión y batería recargable.',
        'stock' => 8
    ],
    [
        'id' => 3,
        'nombre' => 'Monitor 144Hz Curvo',
        'precio' => 300,
        'descuento' => 25,
        'descripcion' => 'Monitor ultra rápido ideal para FPS.',
        'stock' => 5
    ]
];

$productos_sin_descuento = [
    [
        'id' => 4,
        'nombre' => 'Auriculares con micrófono',
        'precio' => 80
    ],
    [
        'id' => 5,
        'nombre' => 'Silla Gaming Ergonómica',
        'precio' => 200
    ],
    [
        'id' => 6,
        'nombre' => 'Alfombrilla XL RGB',
        'precio' => 30
    ]
];



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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UltraGaming </title>
    <link rel="icon" href="imagenes/icono.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Agrega este enlace -->
    <link href="estilos/estilos.css" rel="stylesheet">
</head>

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
                        <a href="home_watch.php" class="nav-link active"> Catalogo </a>
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
                    <a href="cerrar_sesion.php" class="btn btn-danger">Cerrar sesión</a>

                <?php } else { ?>
                    <a href="login.php" class="btn btn-success">Ingresar</a>
                <?php }  ?>
            </div>
        </div>
    </div>
    <br>
    
</header>
<body>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <div class="carousel-caption">
                    </div>
                        <img src="imagenes/banner0.jpg" height="550" width="1380" style="display: block; margin: 0 auto; border-radius: 10px;">
                    </div>
                <div class="carousel-item" data-bs-interval="2000">
                        <img src="imagenes/banner1.jpg" height="550" width="1380" style="display: block; margin: 0 auto; border-radius: 10px;">
                </div>
                 <div class="carousel-item" data-bs-interval="2000">
                        <img src="imagenes/banner2.jpg" height="550" width="1380" style="display: block; margin: 0 auto; border-radius: 10px;">
                </div>
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
    </div>


    <main class="container my-4">
        <section>
                    <div class="card-body col shadow-lg p-6 mb-5 bg-body-tertiary rounded ">
                        <br>
                        <h1 class="text-primary" style="text-align: center;">Productos en Liquidación </h1><br>
                        <h3 style="text-align: center;"> Aprovecha hasta un <del class="text-success">25</del> % Menos</h3>
                    </div>
        </section>

        <section class="row my-5">
            <?php foreach ($productos_descuento as $producto) : ?>
                <?php
                $precio_desc = $producto['precio'] - (($producto['precio'] * $producto['descuento']) / 100);
                $imagen = "imagenes/Productos/{$producto['id']}/principal.jpg";
                $imagen2 = "imagenes/Productos/{$producto['id']}/principal2.jpg";
                if (!file_exists($imagen2)) {
                    $imagen2 = 'imagenes/no-photo.jpg';
                }
                ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo $imagen; ?>" class="card-img-top img-fluid" alt="Producto">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $producto['nombre']; ?></h5>
                            <p class="card-text text-center text-muted"><del><?php echo "$" . number_format($producto['precio'], 2); ?></del></p>
                            <h4 class="text-center text-success"><?php echo "$" . number_format($precio_desc, 2); ?> <small>(<?php echo $producto['descuento']; ?>% de descuento)</small></h4>
                            <p class="text-center"><?php echo $producto['descripcion']; ?></p>
                        </div>
                        <div class="text-center mb-3">
                            <button class="btn btn-primary">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>

        <section class="my-5">
        <h2 class="text-info text-center mb-4">Descubre nuestras categorías</h2>
                <div class="row row-cols-2 row-cols-md-6 g-4">
                    <div class="col-2">
                        <div class="card shadow-sm">
                            <br>
                            <img src="imagenes/categoria1.png" class="card-img-top zoomable img-categoria" alt="Categoria 1">
                            <div class="card-body text-center">
                                
                                <h5 class="card-title">Teclados</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                        <br>
                            <img src="imagenes/categoria2.png" class="card-img-top zoomable img-categoria" alt="Categoria 2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Ratones</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                        <br>
                            <img src="imagenes/categoria3.png" class="card-img-top zoomable img-categoria" alt="Categoria 3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Monitores</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                        <br>
                            <img src="imagenes/categoria1.png" class="card-img-top zoomable img-categoria" alt="Categoria 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Teclados</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                        <br>
                            <img src="imagenes/categoria2.png" class="card-img-top zoomable img-categoria" alt="Categoria 2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Ratones</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                        <br>
                            <img src="imagenes/categoria3.png" class="card-img-top zoomable img-categoria" alt="Categoria 3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Monitores</h5>
                            </div>
                        </div>
                    </div>
                </div>
                

                    <br>
                <h2 class="text-info" style="text-align: center;">Productos Disponibles</h2><br>
        </section>

        <section class="my-5">
            <div class="row">
                <?php foreach ($productos_sin_descuento as $producto) : ?>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="imagenes/Productos/<?php echo $producto['id']; ?>/principal.jpg" class="card-img-top img-fluid" alt="Producto">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                                <p class="card-text"><?php echo "$" . number_format($producto['precio'], 2); ?></p>
                            </div>
                            <div class="text-center mb-3">
                                <button class="btn btn-secondary">Ver detalles</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <h4>Ultra Gaming Store</h4>
            <p>Dirección: Sucursal Los Robles De Pool 8, 50mtrs abajo.</p>
            <div class="d-flex justify-content-center">
                <a href="#" class="text-white mx-2"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-instagram fa-2x"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
