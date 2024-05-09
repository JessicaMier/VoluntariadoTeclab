<?php
session_start();

$mensaje = "";

if (isset($_POST['btnAccion'])) {

    switch ($_POST['btnAccion']) {
        case 'Agregar':
            // Validación de datos recibidos
            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $ID = openssl_decrypt($_POST['id'], COD, KEY);
                $mensaje .= "Ok ID correcto " . $ID . "<br>";
            } else {
                $mensaje .= "ID incorrecto " . $ID . "<br>";
                break;
            }

            if (is_string(openssl_decrypt($_POST['nombre'], COD, KEY))) {
                $NOMBRE = openssl_decrypt($_POST['nombre'], COD, KEY);
                $mensaje .= "Ok NOMBRE correcto " . $NOMBRE . "<br>";
            } else {
                $mensaje .= "NOMBRE incorrecto " . $NOMBRE . "<br>";
                break;
            }

            if (is_numeric(openssl_decrypt($_POST['cantidad'], COD, KEY))) {
                $CANTIDAD = openssl_decrypt($_POST['cantidad'], COD, KEY);
                $mensaje .= "Ok CANTIDAD correcto " . $CANTIDAD . "<br>";
            } else {
                $mensaje .= "CANTIDAD incorrecto " . $CANTIDAD . "<br>";
                break;
            }

            if (is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
                $PRECIO = openssl_decrypt($_POST['precio'], COD, KEY);
                $mensaje .= "Ok PRECIO correcto " . $PRECIO . "<br>";
            } else {
                $mensaje .= "PRECIO incorrecto " . $PRECIO . "<br>";
                break;
            }

            if (!isset($_SESSION['CARRITO'])) { //si no existe
                //acá va toda la información que el usuario manda al carrito a traves de POST
                $producto = array(
                    'ID' => $ID,
                    'NOMBRE' => $NOMBRE,
                    'CANTIDAD' => $CANTIDAD,
                    'PRECIO' => $PRECIO
                );
                $_SESSION['CARRITO'][0] = $producto;
            } else {
                //CONTABILIZAMOS EL CARRITO
                $NumeroProductos = count($_SESSION['CARRITO']);
                $producto = array(
                    'ID' => $ID,
                    'NOMBRE' => $NOMBRE,
                    'CANTIDAD' => $CANTIDAD,
                    'PRECIO' => $PRECIO
                );
                $_SESSION['CARRITO'][$NumeroProductos] = $producto;
            }
            $mensaje= print_r($_SESSION, true);
            break;

        case 'Eliminar':
            //carrito.php recepciona el valor
            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $ID = openssl_decrypt($_POST['id'], COD, KEY);
                //leemos todos los  y comparamos si coincide con el del carrito
                foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                    if ($producto['ID'] == $ID) {
                        //elimino de la session
                        unset($_SESSION['CARRITO'][$indice]);
                        $mensaje .= "Elemento borrado.<br>";
                    }
                }
            } else {
                $mensaje .= "ID incorrecto " . $ID . "<br>";
                break;
            }
            break;
        case 'Vaciar':
            vaciarCarrito();
            $mensaje .= "Carrito vaciado.<br>";
            break;

        case 'Comprar':
            comprarCarrito();
            $mensaje .= "Compra realizada.<br>";
            break;

        }

    
}


function comprarCarrito() {
    header('Location: compraRealizada.php');
    vaciarCarrito();
    exit();
}
function vaciarCarrito() {
    unset($_SESSION['CARRITO']);
}
?>
