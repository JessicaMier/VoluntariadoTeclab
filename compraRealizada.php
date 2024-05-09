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
<h1 class="tituloMain">Seleccione su forma de Pago</h1>
<div class="container mt-5">
    <p class="text-center fs-3">Pagos con tarjeta</p>
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card formTarjeta">
                    <div class="card-body">
                        <h5 class="card-title">Ingrese los datos de su tarjeta de crédito/débito</h5>
                        <form>
                            <div class="form-group">
                                <label class="textLabel" for="card_number">Número de Tarjeta:</label>
                                <input type="text" class="form-control diseñoInput" id="card_number" placeholder="Ingrese el número de su tarjeta">
                            </div>
                            <div class="form-group">
                                <label class="textLabel" for="expiration_date">Fecha de Vencimiento:</label>
                                <input type="text" class="form-control diseñoInput" id="expiration_date" placeholder="MM/AA">
                            </div>
                            <div class="form-group">
                                <label class="textLabel" for="cvv">CVV:</label>
                                <input type="text" class="form-control diseñoInput" id="cvv" placeholder="Ingrese el código de seguridad">
                            </div>
                            <button type="submit" class="btn btn-dark mx-auto container-fluid">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
    <p class="text-center fs-3">Datos del titular de la cuenta</p>
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card formTarjeta">
                    <div class="card-body">
                        <!-- <h5 class="card-title">Ingrese los datos de su tarjeta de crédito/débito</h5> -->
                        <form>
                            <div class="form-group">
                                <label class="textLabel" for="nombreCompleto">Nombre Completo:</label>
                                <input type="text" class="form-control diseñoInput" id="nombreCompleto" placeholder="Ingrese nombre y apellido">
                            </div>
                            <div class="form-group">
                                <label class="textLabel" for="nombreCompleto">DNI:</label>
                                <input type="text" class="form-control diseñoInput" id="nombreCompleto" placeholder="Ingrese nombre y apellido">
                            </div>
                            <div class="form-group">
                                <label class="textLabel" for="domicilio">Domicilio</label>
                                <input type="text" class="form-control diseñoInput" id="domicilio" placeholder="Ingrese calle y numero">
                            </div>
                            <div class="form-group">
                                <label class="textLabel" for="localidad">Localidad:</label>
                                <input type="text" class="form-control diseñoInput" id="localidad" placeholder="Ingrese su localidad">
                            </div>
                            <button type="submit" class="btn btn-dark mx-auto container-fluid">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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