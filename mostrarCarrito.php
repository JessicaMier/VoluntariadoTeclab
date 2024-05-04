<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Carrito</title>
</head>
<body class="bgColor"> 
<header>
    <div class="container-fluid bg-dark fixed-top">
        <!-- -------------------------------------------inicia nav------------------------------ -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container-fluid">
            <div class="container-fluid ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu bg-secondary">
                                <li><a class="dropdown-item text-white itemCategorias" href="./categorias/Celulares.php">Celulares</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-white itemCategorias" href="./categorias/monitores.php">Monitores</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-white itemCategorias" href="./categorias/televisores.php">Smart Tv</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-white itemCategorias" href="./categorias/notebook.php">Notebooks y Accesorios</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ----------------------------------------------fin nav--------------------------------------->
    </div>
</header>
<!-- --------------------------------titulo pagina------------------------------------------------ -->

<h1 class="tituloMain pt-5 mt-5">Carrito de compras</h1>

    <h1 class="tituloMain"> Tecno Shop</h1>
    <p class="text-center mt-5 fs-4 mb-5">Verifica tus productos antes de confirmar la compra:</p>
    <div class="centrar-div">
        <button class="button button-outline btn colorCard"><a href="index.php">Seleccionar Productos</a></button> 
    </div> 
    <hr>
<main>
    
    <section class="container">
    <?php if(!empty($_SESSION['CARRITO'])){?>
    
    <div class="row">
        <?php $total = 0; ?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
        <div class ="col-md-8 mx-auto text-center">
            <div class="card mb-3">
                <div class="card-body colorCard">
                    <h5 class="card-title"><?php echo $producto['NOMBRE']; ?></h5>
                    <p class="card-text">Cantidad: <?php echo $producto['CANTIDAD']; ?></p>
                    <p class="card-text">Precio unitario: $<?php echo $producto['PRECIO']; ?></p>
                    <p class="card-text">Total: $<?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'], 2); ?></p>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">
                        <button class="btn-eliminar btn btn-secondary" type="submit" name="btnAccion" value="Eliminar">
                            <i class="bi bi-trash"></i> Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <?php $total += $producto['PRECIO'] * $producto['CANTIDAD']; ?>
        <?php }?>
    </div>
    
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="colorCard text-center p-3 fs-4 fw-bold" role="alert">
                Total del carrito: $<?php echo number_format($total, 2); ?>
            </div> 
        </div>
    </div> 
    
    <?php }else{ ?>
    <div class="colorCard col-md-8 mx-auto p-3">
        <p class="text-center mt-2 fs-4 mb-2 fw-bold">No hay productos en el carrito</p>
    </div>
    <?php } ?>
</section> 
    
</main>



<!-- --------------------------------pie de página------------------------------------ -->
<footer class=" border-top text-center footerColor p-3 container-fluid mt-5">
    <h4>Descarga la app y accedé a descuentos exclusivos</h4>
    <div class="row justify-content-center">
        <div class="col-4 text-center redes redes1">
            <a href="https://instagram.com"><i class="bi bi-instagram" style="font-size: 40px;"></i></a>
        </div>
        <div class="col-4 text-center redes redes2">
            <a href="https://www.facebook.com"><i class="bi bi-facebook" style="font-size: 40px;"></i></a>
        </div>
        <div class="col-4 text-center redes redes3">
            <a href="https://whatsapp.com"><i class="bi bi-whatsapp" style="font-size: 40px;"></i></a>
        </div>
    </div>
    <div class="text-center p-2 " style="background-color: rgba(43, 41, 41, 0.986)">
        <p class="text-white justify-content-center">© 2023 Copyright: todos los derechos reservados</p>
    </div>
</footer>

<!-- --------------------------------------------js------------------------------------- -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</body>
</html>