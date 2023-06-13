<?php
// Recibir el array del carrito enviado desde JavaScript

$cart= json_decode($_POST['cartItems'], true);
if($cart== null){
    echo ("valio roña");
}
require_once('../db/conexion.php');
$conn= conect::conexion();
// Obtener el ID del cliente de una variable de sesión
session_start();
$idCliente = $_SESSION["idCliente"]; // Asegúrate de ajustar el nombre de la variable de sesión según tu implementación

// Obtener la fecha y hora actual
$fecha = date("Y-m-d H:i:s");


// Insertar la venta en la tabla "venta"
$sql = "INSERT INTO venta (idCliente, fecha) VALUES ('$idCliente', '$fecha')";

if ($conn->query($sql) === TRUE) {
    // Obtener el ID de la venta generada
    $idVenta = $conn->insert_id;
    $total=0;
    // Procesar los libros del carrito
    foreach ($cart as $item) {
        $idProducto = $item['idProducto'];
        $cantidad = $item['cantidad'];
        $subtotal = $item['subtotal'];
        $total += $subtotal;
        // Insertar el registro en la tabla "productoVenta"
        $sql = "INSERT INTO productoVenta (idProducto, idVenta, cantidad, subtotal) VALUES ('$idProducto', '$idVenta', '$cantidad', '$subtotal')";
        
        if ($conn->query($sql) === TRUE) {
            // Registro insertado exitosamente
            $retry = "UPDATE producto SET cantidad = cantidad - $cantidad WHERE idProducto = $idProducto";
            $conn->query($retry);
            //echo "Registro insertado enphpla tabla 'productoVenta' con ID: " . $idProducto;
            require_once("../success.php");
        } else {
            // Error al insertar el registro
            echo "Error al insertar el registro en la tabla 'productoVenta': " . $conn->error;
        }

    }
} else {
    // Error al insertar la venta
    echo "Error al insertar la venta: " . $conn->error;
}

// Cerrar la conexión con la base de datos
$conn->close();
?>