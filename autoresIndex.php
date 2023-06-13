<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/reset.css">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="styles/indices.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/popup.css">
    <script src="scripts/reloj.js" defer></script>
    <script src="scripts/popup.js" defer></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Autores</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

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
                        <li class="nav-item">
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
        <h2>Index de Autores</h2>
        <div id="reloj"></div>
        <section id="indice">
            <div>
                <strong>G</strong> <br>
                <a href="autores.php#george-orwell">George Orwell</a>
            </div>
            <hr>
            <div>
                <strong>H</strong> <br>
                <a href="autores.php#harlan-ellison">Harlan Ellison</a> <br>
                <a href="autores.php#lovecraft">H. P. Lovecraft</a>
            </div>
            <hr>
            <div>
                <strong>I</strong> <br>
                <a href="autores.php#isaac-asimov">Isaac Asimov</a>
            </div>
            <hr>
            <div>
                <strong>N</strong><br>
                <a href="autores.php#neal-stephenson">Neal Stephenson</a>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Bookie. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>