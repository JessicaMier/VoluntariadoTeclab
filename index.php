<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Tecno Shop</title>
</head>

<body class="bgColor">
    <header class="bg-dark">
        <div class="container-fluid bg-dark d-flex justify-content-center fixed-top">
            <!-- ----------- inicia nav--------------- -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark container-fluid d-flex justify-content-center">
                <div class="container-fluid d-flex justify-content-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-lg-0">
                            <li class="nav-item">
                                <a id="todos" class="nav-link active botonCategoria" aria-current="page" href="./index.php">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Categorias
                                </a>
                                <ul class="dropdown-menu bg-secondary">
                                    <li>
                                        <a id="celulares" class="dropdown-item text-white itemCategorias botonCategoria"
                                            href="./categorias/celulares.php">Celulares</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a id="monitores" class="dropdown-item text-white itemCategorias botonCategoria"
                                            href="./categorias/monitores.php?categoria=monitores">Monitores</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a id="televisores" class="dropdown-item text-white itemCategorias botonCategoria"
                                            href="./categorias/televisores.php?categoria=televisores">Smart Tv</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a id="notebook" class="dropdown-item text-white itemCategorias botonCategoria"
                                            href="./categorias/notebook.php?categoria=notebook">Notebook y
                                            Accesorios</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="nombreEmpresa mt-1 text-center">
                        <h3 class="text-white text-center px-1">Tecno Shop</h3>
                    </div>
                    <div class="carrito mt-1 text-center">
                        <a href="mostrarCarrito.php"><button class="btn btn-secondary ms-2 px-3"><i
                                    class="bi bi-cart-fill"></i>(<?php
                            echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                        ?>)</button>
                        </a>
                    </div>
                    
                    <a href="./registro.html"><button type="button"
                            class="btn btn-secondary ms-2 px-3">Registrarse</button>
                    </a>
                </div>
            </nav>
            <!-- -----------------------------Fin Nav----------------------------------------- -->
        </div>
    </header>
    <!-- --------------------------------------------inicia carrousel--------------------------------------- -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide container mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="./img/computer-2982270_640.jpg" class="d-block w-100 mx-auto img-fluid imgCarrusel"
                    alt="imagen notebook y accesorios">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5 class="fs-3 text-black fw-bold">Second slide label</h5> -->
                    <a href="./categorias/notebook.php">
                        <button class="btn btn-primary border fs-5 px-5 botonesInicio"><i class="bi bi-arrow-right-circle"></i>
                            Notebook y Accesorios.</button>
                    </a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="./img/iphones-7479304_640.jpg" class="d-block w-100 mx-auto img-fluid imgCarrusel" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5 class="fs-3 text-black fw-bold">Electro Hogar</h5> -->
                    <a href="./categorias/celulares.php">
                        <button class="btn btn-primary border fs-5 px-5 botonesInicio"><i class="bi bi-arrow-right-circle"></i>
                            Celulares.</button>
                    </a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="./img/monitores.jpg" class="d-block w-100 mx-auto img-fluid imgCarrusel"
                    alt="imagen monitores">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5 class="fs-3 text-black fw-bold">Second slide label</h5> -->
                    <a href="./categorias/monitores.php">
                        <button class="btn btn-primary border fs-5 px-5 botonesInicio"><i class="bi bi-arrow-right-circle"></i>
                            Monitores.</button>
                    </a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="./img/smart.jpg" class="d-block w-100 mx-auto imgCarrusel"
                    alt="imagen Smartphone">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5 class="fs-3 text-white fw-bold">Second slide label</h5> -->
                    <a href="./categorias/televisores.php">
                        <button class="btn btn-primary border fs-5 px-5 botonesInicio"><i class="bi bi-arrow-right-circle"></i>
                            Smart Tv.</button>
                    </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- --------------------------------------------------fin carrousel-------------------------------------- -->
    <main class="pb-3">
        <!-- <div class="alert alert-success">
            <?php echo $mensaje;?> 
            <a href="#" class="badge badge-success">Ver Carrito</a></a>
        </div> -->
        <!-- -------------------------titulo------------------------------------- -->
        <div class="container alert colorCard mt-5 rounded">
            <h2 class="tituloMain container-fluid fst-italic">Nuestros Productos</h2>
        </div>
        <!-- ------------------------------productos card------------------------------ -->
         <div  class="container text-center row d-flex justify-content-center mx-auto">
            <?php
            $sentencia=$pdo->prepare("SELECT * FROM `productos`");
            // execute nos permite ejecutar la sentencia
            $sentencia->execute();
            $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            //print_r($listaProductos);
            ?>
        <?php foreach($listaProductos as $producto){?>
        <div class="productos text-center pb-2 card rounded colorCard m-3" style="width: 16rem;">
                <img src="../img/<?php echo $producto['imagen'];?>" class="card-img-top imgCard" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title"><?php echo $producto['nombre'];?></h5>
                    <p class="card-text fs-5 fw-bolder text-primary">Precio:$<?php echo $producto['precio'];?></p>
                    <p class="card-text bodyCard"><?php echo $producto['descripcion'];?></p>

                    <form action="" method="post">
                    <!-- //encriptamos la informacion para mas seguridad -->
                    
                    <input type="hidden" name ="id" id="id" value = "<?php echo openssl_encrypt($producto['id'],COD,KEY);?>">
                    <input type="hidden" name= "nombre" id="nombre" value = "<?php echo openssl_encrypt($producto['nombre'],COD,KEY);?>">
                    <input type="hidden" name= "precio" id="precio" value = "<?php echo openssl_encrypt($producto['precio'],COD,KEY);?>">
                    <input type="hidden" name= "cantidad" id="cantidad" value = "<?php echo openssl_encrypt(1,COD,KEY);?>" >
                    
                    <button class=" btn btn-dark container btnHover"
                    name="btnAccion"
                    value="Agregar"
                    type="submit">Agregar</button>

                    </form>
                </div>
            </div> 

            <?php }?>
        </div>
        
    </main>
    <!-- -----------------------------medios de pago-------------------------------- -->
    <div class=" container alert colorCard mt-5 text-center tituloMain fst-italic">
        <h3>Medios de Pago</h3>
    </div>
    <div class ="container text-center" id="divDolar"></div>

    <section class="container mt-5 rounded">
        <div class="justify-content-center text-center row">
            <!-- tarjeta -->
            <div class="tarjeta m-3 col text-center">
                <button type="button" class="btn btn-primary container text-center fs-5 mb-4 botonesInicio" data-bs-toggle="modal"
                    data-bs-target="#tarjeta">
                    <i class="bi bi-credit-card fs-4"></i> Tarjetas de Crédito
                </button>
                <div class="modal fade" id="tarjeta" tabindex="-1" aria-labelledby="tarjetaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="tarjetaLabel">Aceptamos todas las tarjetas</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Un pago sin interes, 
                                de 3 a 12 cuotas con intereses
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- transferencia -->
            <div class="transferencia col  m-3">
                <button type="button" class="btn btn-primary container text-center fs-5 mb-4 botonesInicio" data-bs-toggle="modal"
                    data-bs-target="#transferencia">
                    <i class="bi bi-bank fs-4"></i> Transferencias Bancarias
                </button>
                <div class="modal fade" id="transferencia" tabindex="-1" aria-labelledby="transferenciaLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="transferenciaLabel">Transferencias Bancarias</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Podes transferirnos desde tu Banco o a través de Mercado Pago
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- envios -->
            <div class="envios m-3 col">
                <button type="button" class="btn btn-primary container text-center fs-5 mb-4 botonesInicio" data-bs-toggle="modal"
                    data-bs-target="#Envio">
                    <i class="bi bi-truck fs-4"></i> Envios a domicilio
                </button>
                <div class="modal fade" id="Envio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Envios</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Envios express a CABA y GBA.
                                Comunicate para mas info sobre envíos al interior
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- --------------------------------inicia pie de página--------------------------------------- -->
    <footer class=" border-top text-center pt-3 container-fluid rounded footerColor">
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
        <div class="text-center pb-3 container-fluid bg-dark ">
            <p class="text-white">© 2024 Copyright: todos los derechos reservados</p>
        </div>
    </footer>
    <!-- ------------------------------------------js-------------------------------------------------- -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="./js/script.js"></script>
    
</body>

</html>