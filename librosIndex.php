<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/reset.css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="styles/indices.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,200" />
    <title>Libros</title>
    <link rel="shortcut icon" href="images/favicon2.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="scss/custom.css">
</head>

<body>
<header id="inicio">
        <nav class="navbar .bg-opacity-25 fixed-top " id="navvv">
            <div class="container-fluid">
                <a class="navbar-brand" href="principal.php">Bookie</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Hola, <?php echo $_SESSION['nombre'] ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="autoresIndex.php">Autores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="librosIndex.php">libro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href=" shopindex.php">Tienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" id="close" href="model/logoutmodel.php">Cerrar sesion</a>
                        </li>
                    </ul>
                    </form>
                </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h2>Index de Libros</h2>
        <div id="reloj"></div>
        <section id="indice">
            <div>
                <strong>A</strong> <br>
                <a href="libros.php#arrepientete-arlequin-dijo-el-señor-tic-tac">¡Arrepiéntete, Arlequín! dijo el señor
                    Tic-Tac</a>
            </div>
            <hr>
            <div>
                <strong>C</strong> <br>
                <a href="libros.php#criptonomicon">Criptonomicón</a>
                <a href="libros.php#cutulu">Cthulhu</a>
            </div>
            <hr>
            <div>
                <strong>F</strong> <br>
                <a href="libros.php#fundacion">Fundación</a> <br>
                <a href="libros.php#fundacion-e-imperio">Fundación e imperio</a>
            </div>
            <hr>
            <div>
                <strong>H</strong> <br>
                <a href="libros.php#homenaje">Homenaje a Cataluña</a> <br>
            </div>
            <hr>
            <div>
                <strong>L</strong> <br>
                <a href="libros.php#la-bestia-que-pedía-amor-a-gritos-en-el-centro-del-mundo">La bestia que pedía amor
                    a gritos en el centro del mundo</a> <br>
                <a href="libros.php#laciudad">La ciudad sin nombre</a> <br>
                <a href="libros.php#montañas">Las montañas de la locura</a>
            </div>
            <hr>
            <div>
                <strong>N</strong> <br>
                <a href="libros.php#no-tengo-boca-y-debo-gritar">No tengo boca y debo gritar</a>
            </div>
            <hr>
            <div>
                <strong>R</strong> <br>
                <a href="libros.php#revelionenlagranja">Revelion en la granja</a>
            </div>
            <hr>
            <div>
                <strong>S</strong> <br>
                <a href="libros.php#segunda-fundacion">Segunda fundación</a> <br>
                <a href="libros.php#seveneves">Seveneves</a> <br>
                <a href="libros.php#snowcrash">Snowcrash</a>
            </div>
            <hr>
            <div>
                <strong>#</strong> <br>
                <a href="libros.php#1984">1984</a>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Bookie. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>