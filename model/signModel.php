<?php
    require_once('../db/conexion.php');
    $conexion= conect::conexion();

    $user = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $query = "SELECT idCliente FROM cliente WHERE nombre = '$user'";
    $exist = mysqli_query($conexion, $query);
    if($password1 == $password2){
        if(mysqli_num_rows($exist) == 1){
            header("Location: ../register.php?error=2");
        }
        else{
            $query = "INSERT INTO `cliente` (`nombre`,`clave`) VALUES ('$user', '$password1')";
            $result = mysqli_query($conexion, $query);
            if ($result) {
                // El registro fue exitoso
                header("Location: ../register.php?exito=1");
            } else {
                // Ocurrió un error durante el registro
                header("Location: ../register.php?error=2");
            }
        }
    }
    else{
        header("Location: ../register.php?error=3");
    }