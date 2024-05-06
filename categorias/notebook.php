<?php
include '../global/config.php';
include '../global/conexion.php';
include '../carrito.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Notebook y Accesorios</title>
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
                                <a class="nav-link active" aria-current="page" href="../index.php">Volver</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Categorias
                                </a>
                                <ul class="dropdown-menu bg-secondary">
                                    <li><a class="dropdown-item text-white itemCategorias botonCategoria" href="./celulares.php">Celulares</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-white itemCategorias botonCategoria" href="./monitores.php">Monitores</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-white itemCategorias botonCategoria" href="./televisores.php">Smart Tv</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-white itemCategorias botonCategoria" href="./notebook.php">Notebook y
                                            Accesorios</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="nombreEmpresa mt-1 text-center">
                        <h3 class="text-white text-center px-1">Tecno Shop</h3>
                    </div>
                    <div class="carrito mt-1 text-center">
                        <a href="../mostrarCarrito.php"><button class="btn btn-secondary ms-2 px-3"><i
                                    class="bi bi-cart-fill"></i>(<?php
                            echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                        ?>)</button>
                        </a>
                    </div>
                    <a href="../registro.html"><button type="button"
                            class="btn btn-secondary ms-2 px-3">Registrarse</button>
                    </a>
                </div>
            </nav>
            <!-- -----------------------------Fin Nav----------------------------------------- -->
        </div>
    </header>
    <main class="container mt-5">
        <h1 class="text-center mt-5">Tecno Shop - Notebooks y Accesorios</h1>
        <div  class="container text-center row d-flex justify-content-center mx-auto">
            <?php
            $sentencia=$pdo->prepare("SELECT * FROM `productos` WHERE id_categoria = 4;");
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
                    <input type="hidden" name=  "nombre"id="nombre" value = "<?php echo openssl_encrypt($producto['nombre'],COD,KEY);?>">
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
        </div>
        
    </main>
     <!-- --------------------------------inicia pie de página--------------------------------------- -->
     <footer class=" border-top text-center footerColor pt-3 container-fluid rounded">
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
            <p class="text-white">© 2023 Copyright: todos los derechos reservados</p>
        </div>
    </footer>
    <!-- ------------------------------------------js-------------------------------------------------- -->
    
    <script src="../js/carrito.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    
</body>
</html>