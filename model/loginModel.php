<?php
    session_start();
    require_once('../db/conexion.php');
    $conexion= conect::conexion();
    $user = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM cliente WHERE nombre = '$user' AND clave = '$password'";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Almacena los datos del usuario en la sesión
        $_SESSION['idCliente'] = $row['idCliente'];
        $_SESSION['nombre'] = $row['nombre'];

        echo $_SESSION['idCliente'];
        // Redirige al usuario a la página de inicio después del inicio de sesión exitoso
        header("Location: ../principal.php");
        exit();
    } else {
        // El inicio de sesión falló
        header("Location: ../login.php?error=1");
        exit();
    }
    
