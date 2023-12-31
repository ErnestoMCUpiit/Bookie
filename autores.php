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
    <link rel="stylesheet" href="styles/autores.css" type="text/css">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <link rel="stylesheet" href="styles/popup.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <script src="scripts/reloj.js" defer></script>
    <script src="scripts/popup.js" defer></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,200" />
    <title>Autores</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="scss/custom.css">
</head>

<body>
    <header id="inicio">
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
        <article id="harlan-ellison" class="right">
            <section class="dataAutor">
                <h2>Harlan Ellison</h2>
                <figure class="autor">
                    <img src="images/autores/harlan-ellison.jpg" alt="harlan-ellison">
                </figure>
            </section>
            <p class="descripcion"> Nacimiento: Cleveland, 27 de mayo de 1934 <br>
                País: Estados Unidos <br>
                Escritor americano, Harlan Ellison es uno de los grandes autores de ciencia ficción estadounidense del
                siglo
                XX,
                destacando principalmente en el terreno del cuento y la novela corta. <br>
                De carrera prolífica, presenta más de 1000 obras en su haber, Ellison ha recibido numerosos premios,
                algunos
                tan
                importantes como el Hugo, el Nebula, el Stoker o el Edgar. Además, también ha trabajado como guionista
                en
                series
                como Star Trek, Más allá de la realidad o La hora de Alfred Hitchcock. <br>
                Ellison fue nombrado Maestro de la Ciencia Ficción por la Asociación de Escritores de Ciencia Ficción
                Americanos
                y ha recibido otros reconocimientos al total de su carrera. <br>
            </p>
            <br>
            <section class="libros">
                <h3>Libros</h3>
                <figure class="imagesLibros">
                    <a href="libros.php#arrepientete-arlequin-dijo-el-señor-tic-tac"><img
                            src="images/libros/harlequin.jpg"></a>
                    <a href="libros.php#no-tengo-boca-y-debo-gritar"><img src="images/libros/no-mouth.jpg"></a>
                    <a href="libros.php#la-bestia-que-pedía-amor-a-gritos-en-el-centro-del-mundo"><img
                            src="images/libros/shouted-love.jpg"></a>
                </figure>
            </section>
        </article>
        <hr>
        <article id="isaac-asimov" class="right">
            <section class="dataAutor">
                <h2>Isaac Asimov</h2>
                <figure class="autor">
                    <img src="images/autores/isaac_asimov.jpg" alt="isaac-asimov">
                </figure>
            </section>
            <p class="descripcion">
                Nacimiento: Petrovichi, 2 de enero de 1920 <br>
                País: Estados Unidos <br>
                Nacido en Rusia en 1920, su familia decidió emigrar a Estados Unidos cuando Asimov solo contaba con tres
                años de
                edad. Se crio, pues, en Brooklyn, Nueva York, donde su padre mantenía una tienda de venta de golosinas y
                revistas. Desde pequeño ya demostró su interés por la ciencia ficción, siendo un ávido consumidor de
                revistas
                pulp. <br>
                Su atracción por la ciencia le llevó a estudiar Ingeniería Química, donde luego lograría doctorarse en
                Bioquímica y ser profesor en la Universidad de Boston durante varios años, hasta que su labor literaria
                le
                llevó
                a abandonar el mundo de la docencia. <br>
                A lo largo de su carrera literaria recibió gran número de galardones literarios, entre los cuales se
                encuentran
                varios Premios Hugo, Nébula o Locus. Asimov formó parte, junto a Robert A. Heinlein y Arthur C. Clarke,
                del
                mejor exponente de la época dorada de la ciencia ficción. <br>
            </p>
            <br>
            <section class="libros">
                <h3>Libros</h3>
                <figure class="imagesLibros">
                    <a href="libros.php#fundacion"><img src="images/libros/foundation.jpg"></a>
                    <a href="libros.php#fundacion-e-imperio"><img src="images/libros/foundation-empire.jpg"></a>
                    <a href="libros.php#segunda-fundacion"><img src="images/libros/foundation-second.jpg"></a>
                </figure>
            </section>
        </article>
        <hr>
        <article id="neal-stephenson" class="right">
            <section class="dataAutor">
                <h2>Neal Stephenson</h2>
                <figure class="autor">
                    <img src="images/autores/neal-stephenson.jpg" alt="neal-stephenson">
                </figure>
            </section>
            <p class="descripcion">
                Nacimiento: Fort Meade, 31 de octubre de 1959 <br>
                País: Estados Unidos <br>
                Escritor americano, Neal Stephenson se graduó en la Ames High School de Iowa, estudió física y
                geografía,
                licenciándose en esta última en la Universidad de Boston. Escribe ocasionalmente con el seudónimo Stepen
                Bury.
                <br>
                Stephenson es conocido por sus novelas, cuentos cortos y ensayos, está considerado dentro del llamado
                género
                postcyberpunk. Sus obras, de escritura compleja y detallada, son de ciencia ficción, y en ellas se
                mezclan
                conceptos informáticos y de nanotecnología con elementos históricos, mitológicos y políticos. <br>
                A lo largo de su carrera ha ganado premios como el Prometheus o el Hugo. De entre su obra habría que
                destacar
                títulos como Snowcrash, La era del diamante, el Criptonomicón o el Ciclo Barroco, entre otros. <br>
            </p>
            <br>
            <section class="libros">
                <h3>Libros</h3>
                <figure class="imagesLibros">
                    <a href="libros.php#criptonomicon"><img src="images/libros/cryptonomicon.jpg"></a>
                    <a href="libros.php#seveneves"><img src="images/libros/seveneves.jpg"></a>
                    <a href="libros.php#snowcrash"><img src="images/libros/snow-crash.jpg"></a>
                </figure>
            </section>
        </article>
        <hr>
        <article id="George-orwel" class="right">
            <section class="dataAutor">
                <h2>George Orwel</h2>
                <figure class="autor">
                    <img src="images/autores/george-orwell.jpg" alt="george-orwell">
                </figure>
            </section>
            <p class="descripcion">
                Nacimiento: Motihari, Raj Británico, 25 de junio de 1903 <br>
                País: India <br>
                Además de cronista, crítico de literatura y novelista, es uno de los ensayistas en lengua inglesa más
                destacados
                de las décadas de 1930 y de 1940. También es conocido por sus críticas al totalitarismo en su novela
                corta
                alegórica Rebelión en la granja (1945) y su novela distópica 1984 (1949), escrita en sus últimos años de
                vida y
                publicada poco antes de su fallecimiento, y en la que crea el concepto de «Gran Hermano», que desde
                entonces
                pasó al lenguaje común de la crítica de las técnicas modernas de vigilancia.
            </p>
            <br>
            <section class="libros">
                <h3>Libros</h3>
                <figure class="imagesLibros">
                    <a href="libros.php#1984"><img src="images/libros/1984.jpg"></a>
                    <a href="libros.php#revelionenlagranja"><img src="images/libros/revelionenlagranja.jpg"></a>
                    <a href="libros.php#homenaje"><img src="images/libros/homenaje.jpg"></a>
                </figure>
            </section>
        </article>
        <hr>
        <article id="lovecraft" class="right">
            <section class="dataAutor">
                <h2>Howard Philips Lovecraft</h2>
                <figure class="autor">
                    <img src="images/autores/lovecraft.jpg" alt="loveraft">
                </figure>
            </section>
            <p class="descripcion">
                Nacimiento:Providence, Rhode Island, 20 de agosto de 1890 <br>
                País: Esatados Unidos <br>
                Fue un escritor estadounidense, autor de relatos y novelas de terror y ciencia ficción. Se le considera
                un
                gran
                innovador del cuento de terror, al que aportó una mitología propia —los Mitos de Cthulhu—, desarrollada
                en
                colaboración con otros autores, actualmente en vigencia. Su obra constituye un clásico del horror
                cósmico,
                una línea narrativa que se aparta de las tradicionales historias de terror sobrenatural —satanismo,
                fantasmas—,
                incluyendo elementos de ciencia ficción como, por ejemplo, razas alienígenas, viajes en el tiempo o
                existencia
                de otras dimensiones.
            </p>
            <br>
            <section class="libros">
                <h3>Libros</h3>
                <figure class="imagesLibros">
                    <a href="libros.php#cutulu"><img src="images/libros/cutulu.jpg"></a>
                    <a href="libros.php#montañas"><img src="images/libros/monañas.jpg"></a>
                    <a href="libros.php#laciudad"><img src="images/libros/laciudad.jpg"></a>
                </figure>
            </section>
        </article>
        <div id="reloj"></div>
        <div id="modal" class="hidden">
            <div id="popup" class="hidden">
                <span class="material-symbols-outlined" id="cerrar">close</span>
            </div>
        </div>
        <div class="reloj" id="hastaArriba">
            <a href="autores.php#inicio"><span class="material-symbols-outlined">
                arrow_upward
                </span></a>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 Bookie. All rights reserved.</p>
    </footer>
</body>

</html>