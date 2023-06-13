<?php
    session_start();
    $sesionVar=$_SESSION['nombre'];
    if($sesionVar=null || $sesionVar=""){
        header("Location:../index.php");
        die();
    }
    session_destroy();
    header("Location:../index.php");

?>