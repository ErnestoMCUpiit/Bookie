<?php
    require_once("model/librosModel.php");
    $libro = new Libro();
    $librosObtenidos = $libro->getLibros();
    require_once("shopIndex.php");