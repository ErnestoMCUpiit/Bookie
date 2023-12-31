<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/reset.css" type="text/css">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">
    <title>Contacto</title>
    <link rel="shortcut icon" href="images/favicon3.ico" type="image/x-icon">

    
</head>

<body>
    <header>
        <h1 id="titulo">
            <a href="principal.php">Bookie</a>
        </h1>
        <nav>
            <a href="autoresIndex.php">Autores |</a>
            <a href="librosIndex.php">Libros |</a>
            <a href="shopIndex.php">Tienda |</a>
            <a href="contacto.php">Contacto |</a>
            <a class="button" href="login.php">Inicia Sesión</a>
        </nav>
    </header>
    <main>
        <form action="" method="get">
            <fieldset>
                <h2>
                    Contactános
                </h2>
                <label for="name">Nombre</label> <br>
                <input type="text" id="name" name="name">
                <br>
                <label for="email">Correo electrónico</label><br>
                <input type="email" id="email" name="email">
                <br>
                <label for="comentario">Comentario</label><br>
                <textarea name="comentario" id="" cols="60" rows="10"></textarea>
                <br> <br>
                <input type="submit" value="Enviar" id="enviar">
                <input type="reset" value="Cancelar" id="cancelar">
            </fieldset>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 Bookie. All rights reserved.</p>
    </footer>
</body>

</html>