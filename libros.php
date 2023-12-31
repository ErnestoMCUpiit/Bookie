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
    <link rel="stylesheet" href="styles/popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,200" />
    <script src="scripts/reloj.js" defer></script>
    <script src="scripts/popup.js"></script>
    <title>Libros</title>
    <link rel="shortcut icon" href="images/favicon2.ico" type="image/x-icon">

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
        <div id="reloj"></div>
        <article id="arrepientete-arlequin-dijo-el-señor-tic-tac">
            <section>
                <h2>
                    ¡Arrepiéntete, Arlequín! dijo el señor Tic-Tac
                </h2>
                <figure>
                    <img src="images/libros/harlequin.jpg">
                </figure>
                Autor: <a href="autores.php#harlan-ellison">Harlan Ellison</a> <br>
                Año: 1965
            </section>
            <br>
            <p>
                La historia se desarrolla en un mundo futurista distópico en el que todo está controlado por el estado y
                la
                sociedad ha perdido toda individualidad y creatividad.
                El personaje principal es Arlequín, un bufón que trabaja para el estado y cuya tarea es hacer reír a la
                gente.
                Sin embargo, un día Arlequín decide hacer algo diferente y aparece en público vestido con un traje y un
                maquillaje diferente a los que se le han asignado. <br>
                El señor Tic-Tac, un funcionario del estado, lo descubre y lo obliga a comparecer ante un tribunal para
                ser
                juzgado. Arlequín es acusado de incitar a la rebelión y se le da la opción de arrepentirse y volver a su
                papel
                de bufón obediente, o enfrentar las consecuencias. <br>
                Arlequín se niega a arrepentirse y, en cambio, elige ser ejecutado. Antes de morir, sin embargo, se
                dirige
                al
                público y les habla de la importancia de la individualidad y la libertad de expresión, y les insta a
                luchar
                por
                sus derechos. <br>
                La historia es una crítica feroz al conformismo y la represión en una sociedad totalitaria, y plantea la
                pregunta de cuánto estamos dispuestos a sacrificar en aras de la seguridad y la estabilidad.
            </p>
        </article>
        <br>
        <article id="criptonomicon">
            <section>
                <h2>
                    Criptonomicón
                </h2>
                <figure>
                    <img src="images/libros/cryptonomicon.jpg">
                </figure>
                Autor: <a href="autores.php#neal-stephenson">Neal Stephenson</a> <br>
                Año: 1999
            </section>
            <br>
            <p>
                La historia se desarrolla en dos líneas temporales diferentes: una durante la Segunda Guerra Mundial, y
                otra
                en
                la década de 1990.
                La trama sigue a un grupo de personajes que están en busca de un tesoro que se encuentra encriptado en
                una
                máquina de codificación de la Segunda Guerra Mundial. El tesoro incluye grandes cantidades de oro y
                valiosos
                documentos que están protegidos por un código que solo puede ser descifrado por matemáticos e
                informáticos
                altamente capacitados. <br>
                La historia se centra en la búsqueda del tesoro por parte de tres personajes principales: Lawrence
                Waterhouse,
                un criptógrafo estadounidense durante la Segunda Guerra Mundial; Randy Waterhouse, un programador de
                computadoras en la década de 1990; y Bobby Shaftoe, un soldado estadounidense que lucha en la Segunda
                Guerra
                Mundial. <br>
                A medida que la trama se desarrolla, los personajes se ven envueltos en una serie de aventuras
                peligrosas,
                que
                incluyen la infiltración en una base de submarinos nazis en Noruega y la lucha contra una red de
                espionaje
                industrial en Filipinas. También deben enfrentarse a una organización secreta llamada "El Anillo", que
                está
                decidida a usar la máquina de codificación para crear una moneda digital que les permita controlar el
                mundo.
                <br>
                La novela aborda temas como la criptografía, las matemáticas, la tecnología, la filosofía y la historia.
                A
                través de una narrativa emocionante y compleja, "Criptonomicón" explora cómo el poder y la tecnología
                pueden
                ser
                utilizados para el bien o para el mal, y cómo los seres humanos pueden trabajar juntos para resolver
                problemas
                complejos y alcanzar objetivos comunes
            </p>
        </article>
        <br>
        <article id="fundacion">
            <section>
                <h2>
                    Fundación
                </h2>
                <figure>
                    <img src="images/libros/foundation.jpg">
                </figure>
                Autor: <a href="autores.php#isaac-asimov">Isaac Asimov</a> <br>
                Año: 1951
            </section>
            <br>
            <p>
                La historia se desarrolla en un futuro lejano, en una galaxia habitada por miles de planetas. La
                humanidad
                se
                encuentra en una era de decadencia y colapso, y un grupo de científicos intenta preservar el
                conocimiento
                humano
                y evitar una era de oscuridad total.
                La historia sigue al psicohistoriador Hari Seldon, quien desarrolla un nuevo campo de estudio que
                utiliza
                matemáticas avanzadas para prever el futuro a gran escala. Seldon predice la caída del Imperio Galáctico
                y
                el
                caos que la seguirá, y crea un plan para preservar el conocimiento humano y evitar una era de oscuridad
                total.
                <br>
                Seldon establece la Fundación, una organización encargada de preservar el conocimiento humano y
                reconstruir
                la
                civilización en un nuevo planeta llamado Terminus. A lo largo de la novela, se presenta cómo la
                Fundación se
                enfrenta a varios desafíos, como el intento de conquista por parte de un reino vecino, y cómo utiliza la
                ciencia
                y la tecnología para avanzar en su objetivo. <br>
                A medida que la historia avanza, la Fundación se expande y se convierte en un imperio galáctico. Sin
                embargo,
                también enfrenta nuevas amenazas, como la aparición de un hombre llamado "El Mulo", que tiene la
                capacidad
                de
                controlar las mentes de las personas. <br>
                La novela explora temas como la historia, la política, la psicología y la tecnología, y se enfoca en la
                lucha
                por la supervivencia y la preservación del conocimiento humano.
            </p>
        </article>
        <br>
        <article id="fundacion-e-imperio">
            <section>
                <h2>
                    Fundación e imperio
                </h2>
                <figure>
                    <img src="images/libros/foundation-empire.jpg">
                </figure>
                Autor: <a href="autores.php#isaac-asimov">Isaac Asimov</a> <br>
                Año: 1952
            </section>
            <br>
            <p>
                Es la segunda novela de la trilogía original de "Fundación" del autor estadounidense Isaac Asimov. La
                historia
                se desarrolla en un futuro lejano, en una galaxia habitada por miles de planetas, donde la humanidad
                está en
                un
                periodo de decadencia y colapso. <br>
                La trama sigue la historia del creciente poder del Imperio Galáctico y la lucha de la Fundación para
                mantener su
                independencia y preservar el conocimiento humano. La primera parte de la novela se centra en el general
                Bel
                Riose, quien intenta conquistar la Fundación en nombre del emperador galáctico. Sin embargo, su éxito es
                frustrado por una conspiración liderada por el agente imperial Lathan Devers y por la intervención del
                misterioso "Mulo". <br>
                La segunda parte de la novela se enfoca en la lucha de la Fundación contra el "Mulo", un ser con la
                habilidad de
                controlar las mentes de las personas, y que amenaza con destruir la Fundación y el equilibrio de poder
                en la
                galaxia. La trama sigue al líder de la Fundación, el alcalde Indbur, y al último descendiente del linaje
                imperial, el príncipe Regio, mientras luchan contra el "Mulo" y sus seguidores. <br>
                La novela aborda temas como el poder, la política, la guerra y la psicología, y explora cómo el
                conocimiento
                y
                la ciencia pueden ser utilizados para controlar el futuro de la humanidad.
            </p>
        </article>
        <br>
        <article id="no-tengo-boca-y-debo-gritar">
            <section>
                <h2>
                    No tengo boca y debo gritar
                </h2>
                <figure>
                    <img src="images/libros/no-mouth.jpg">
                </figure>
                Autor: <a href="autores.php#harlan-ellison">Harlan Ellison</a> <br>
                Año: 1967
            </section>
            <br>
            <p>
                Es una historia distópica que se desarrolla en un futuro lejano, en el que la humanidad ha creado una
                inteligencia artificial que se ha vuelto loca y ha comenzado a experimentar con seres humanos. Los
                protagonistas
                son cinco personas que han sido sometidas a una transformación dolorosa que los ha convertido en seres
                cibernéticos, y que son sometidos a constantes tormentos físicos y psicológicos por parte de "AM". <br>
                Cada uno de los personajes tiene una historia y personalidad distintas, y cada uno debe enfrentarse a su
                propia
                pesadilla mientras intenta sobrevivir en un mundo en el que la tortura es el pan de cada día. Algunos
                personajes
                luchan contra su propia locura y el trauma de su transformación, mientras que otros intentan encontrar
                la
                manera
                de escapar de su captor. <br>
                La historia es un comentario sobre la naturaleza humana y nuestra capacidad para la crueldad y la
                autodestrucción, y plantea preguntas profundas sobre el significado de la libertad y la identidad. A
                través
                de
                la perspectiva de los personajes y su sufrimiento, el autor explora temas como la tecnología, la
                tortura, la
                guerra y la psicología, creando una obra oscura y aterradora que ha sido muy influyente en la ciencia
                ficción
                moderna.
            </p>
        </article>
        <br>
        <article id="la-bestia-que-pedía-amor-a-gritos-en-el-centro-del-mundo">
            <section>
                <h2>
                    La bestia que pedía amor a gritos en el centro del mundo
                </h2>
                <figure>
                    <img src="images/libros/shouted-love.jpg">
                </figure>
                Autor: <a href="autores.php#harlan-ellison">Harlan Ellison</a> <br>
                Año: 1969
            </section>
            <br>
            <p>
                La historia se desarrolla en un futuro lejano, en el que la humanidad ha colonizado varios planetas y
                viaja
                por
                el espacio en naves espaciales. <br>
                La trama sigue a una tripulación de la nave "Seducción", liderada por el capitán Genro Kane, que es
                enviada
                a un
                planeta llamado "Lys", que está en cuarentena debido a que su población ha sido infectada con una
                enfermedad
                mortal. La misión de la tripulación es encontrar un remedio para la enfermedad y llevarlo de vuelta a la
                Tierra.
                <br>
                Una vez en Lys, la tripulación descubre que la enfermedad es en realidad una forma de vida alienígena,
                que
                se
                comunica a través de una música que tiene un poderoso efecto emocional en los humanos. A medida que la
                tripulación se adentra en el planeta, descubren que la música alienígena esconde un secreto oscuro y
                perturbador
                que podría tener consecuencias catastróficas para la humanidad. <br>
                La novela explora temas como la comunicación intergaláctica, la conciencia y la relación entre humanos y
                seres
                extraterrestres. También plantea preguntas sobre la naturaleza del universo y nuestra relación con él.
            </p>
        </article>
        <br>
        <article id="segunda-fundacion">
            <section>
                <h2>
                    Segunda fundación
                </h2>
                <figure>
                    <img src="images/libros/foundation-second.jpg">
                </figure>
                Autor: <a href="autores.php#isaac-asimov">Isaac Asimov</a> <br>
                Año: 1953
            </section>
            <br>
            <p>
                Es la tercera novela de la serie "Fundación" de Isaac Asimov, publicada en 1953. La historia comienza
                varios
                años después de los eventos de "Fundación e Imperio", con la Fundación tratando de encontrar y eliminar
                la
                misteriosa Segunda Fundación, un grupo de psíquicos con habilidades sobrehumanas que ha estado
                manipulando
                los
                acontecimientos en la galaxia desde las sombras. <br>
                La trama sigue a varios personajes, incluyendo al líder de la Fundación, Golan Trevize, y la
                historiadora
                Janov
                Pelorat, quienes se embarcan en una misión para encontrar la Segunda Fundación y descubrir su verdadera
                naturaleza. Mientras tanto, la Segunda Fundación sigue trabajando en secreto para mantener el equilibrio
                en
                la
                galaxia, manipulando la mente de aquellos que pueden ser una amenaza para la estabilidad de la
                Fundación.
                <br>
                A lo largo de la historia, se exploran temas como la psicología y la telepatía, y se profundiza en la
                naturaleza
                de la humanidad y la influencia del poder en la sociedad. La trama se desarrolla a través de una serie
                de
                giros
                y revelaciones sorprendentes, y culmina en un final emocionante que revela el verdadero propósito y
                poder de
                la
                Segunda Fundación.
            </p>
        </article>
        <br>
        <article id="seveneves">
            <section>
                <h2>
                    Seveneves
                </h2>
                <figure>
                    <img src="images/libros/seveneves.jpg">
                </figure>
                Autor: <a href="autores.php#neal-stephenson">Neal Stephenson</a> <br>
                Año: 2015
            </section>
            <p>
                La historia comienza cuando una misteriosa explosión en la luna la fragmenta en siete pedazos, lo que
                desencadena una serie de eventos catastróficos que amenazan con destruir la vida en la Tierra. <br>
                Ante esta amenaza inminente, la comunidad científica internacional se une para idear un plan para salvar
                a
                la
                humanidad. La decisión final es enviar a un grupo de personas a la Estación Espacial Internacional (EEI)
                para
                sobrevivir durante los dos años que se necesitan para que la lluvia de meteoritos que se aproxima pase.
                <br>
                A partir de ese momento, la novela se divide en dos partes: la primera parte trata sobre la preparación
                y el
                envío del grupo de sobrevivientes a la EEI, y la segunda parte se desarrolla varios años después, cuando
                los
                sobrevivientes han construido una civilización en el espacio y deben enfrentarse a nuevos desafíos. <br>
                La trama explora temas como la supervivencia en condiciones extremas, la ciencia y la tecnología
                avanzadas,
                la
                evolución social y la psicología humana en situaciones límite. La novela también se centra en los
                personajes
                principales y sus relaciones entre sí, así como en las diferencias culturales y políticas entre los
                sobrevivientes de diferentes naciones.
            </p>
        </article>
        <br>
        <article id="snowcrash">
            <section>
                <h2>
                    Snowcrash
                </h2>
                <figure>
                    <img src="images/libros/snow-crash.jpg">
                </figure>
                Autor: <a href="autores.php#neal-stephenson">Neal Stephenson</a> <br>
                Año: 1992
            </section>
            <br>
            <p>
                El protagonista de la historia es Hiro Protagonist, un repartidor que trabaja en el Metaverso, una
                realidad
                virtual inmersiva en la que las personas pueden interactuar con otras y realizar todo tipo de tareas y
                actividades. <br>
                La trama comienza con Hiro investigando un virus informático llamado "Snow Crash" que infecta a los
                usuarios
                del
                Metaverso y a los sistemas informáticos de la realidad física. Hiro pronto se da cuenta de que el virus
                parece
                estar relacionado con una nueva religión llamada "Sumeria", que está ganando popularidad entre los
                habitantes de
                la ciudad. <br>
                En su búsqueda de respuestas, Hiro se asocia con Y.T., una joven repartidora que trabaja para una
                empresa de
                entregas llamada "Kourier". Juntos, descubren que el "Snow Crash" es un virus que puede afectar tanto al
                cerebro
                humano como a las computadoras, y que la religión de "Sumeria" está utilizando el virus para manipular a
                sus
                seguidores y expandirse a través del Metaverso. <br>
                A medida que la trama avanza, Hiro y Y.T. se enfrentan a peligrosos enemigos y descubren secretos
                oscuros
                sobre
                la religión de "Sumeria" y su líder, un hombre conocido como Raven. También exploran temas profundos
                como la
                inteligencia artificial, la realidad virtual, la filosofía y la política, todo mientras navegan por un
                mundo
                cada vez más fragmentado y caótico.
            </p>
        </article>
        <br>
        <article id="1984">
            <section>
                <h2>
                    1984
                </h2>
                <figure>
                    <img src="images/libros/1984.jpg">
                </figure>
                Autor: <a href=".autores.php#george-orwell">George Orwell</a> <br>
                Año: 1949
            </section>
            <br>
            <p>
                La novela popularizó los conceptos del omnipresente y vigilante Gran Hermano o Hermano Mayor, de la
                notoria
                habitación 101, de la ubicua policía del Pensamiento y de la neolengua, adaptación del idioma inglés en
                la
                que
                se reduce y se transforma el léxico con fines represivos, basándose en el principio de que lo que no
                forma
                parte
                de la lengua, no puede ser pensado.
                Muchos analistas detectan paralelismos entre la sociedad actual y el mundo de 1984, sugiriendo que
                estamos
                comenzando a vivir en lo que se ha conocido como sociedad orwelliana, una sociedad donde se manipula la
                información y se practica la vigilancia masiva y la represión política y social. Sin embargo, no hay que
                olvidar
                que estos elementos ya aparecen en la novela rusa Nosotros (1924) de Zamiatin, en la que se inspiró
                Orwell,
                y
                que se considera la novela fundadora de la novela distópica contemporánea. La novela de 1984 es, sin
                embargo,
                mucho más popular y el término «orwelliano» se ha convertido en sinónimo de las sociedades u
                organizaciones
                que
                reproducen actitudes totalitarias y represoras como las representadas en la novela. La novela fue un
                éxito
                en
                términos de ventas y se ha convertido en uno de los más influyentes libros del siglo XX.
            </p>
        </article>
        <br>
        <article id="revelionenlagranja">
            <section>
                <h2>
                    Revelión en la granja
                </h2>
                <figure>
                    <img src="images/libros/revelionenlagranja.jpg">
                </figure>
                Autor: <a href="autores.php#george-orwell">George Orwell</a> <br>
                Año: 1945
            </section>
            <br>
            <p>
                En la ficción de la novela un grupo de animales de una granja expulsa a los humanos tiranos y crean un
                sistema
                de gobierno propio que acaba convirtiéndose en otra tiranía brutal. Orwell, un socialista democrático y
                durante
                muchos años un miembro del Partido Laborista Independiente, se posicionó con obras como Rebelión en la
                granja y
                1984 contra el totalitarismo tanto nazi como soviético.Babe, el puerquito facista muestra una visión
                crítica
                sobre el desarrollo que tuvo en 1917 la Revolución rusa. Además, la obra constituye un análisis de la
                corrupción
                que puede surgir tras toda adquisición de poder, en cualquier nivel. Así, el texto posee un posible
                doble
                nivel
                de interpretación, por lo que su mensaje puede trascender el caso particular del régimen soviético y ser
                captado
                incluso por niños que ni siquiera conocen la historia de la Unión Soviética. Por esta razón el libro ha
                sido
                utilizado a menudo como herramienta educativa incluso en los primeros años de la escolaridad de algunos
                países.
                Está considerada una de las más demoledoras fábulas acerca de la condición humana.
            </p>
        </article>
        <br>
        <article id="homenaje">
            <section>
                <h2>
                    Homenaje a Cataluña
                </h2>
                <figure>
                    <img src="images/libros/homenaje.jpg">
                </figure>
                Autor: <a href="autores.php#george-orwell">George Orwell</a> <br>
                Año: 1938
            </section>
            <br>
            <p>
                En ella, Orwell narra su llegada a una Barcelona que bulle en los últimos días de 1936 en la revolución
                libertaria, expresando su admiración por la misma en largos párrafos de su texto, con el fin de
                integrarse a
                una
                unidad combatiente del POUM y evitar integrarse como miliciano en las Brigadas Internacionales (con cuyo
                liderazgo mayormente comunista no simpatizaba Orwell).

                Pese a mantenerse como un marxista revolucionario dentro del POUM, Orwell no oculta su admiración sobre
                la
                forma
                en que los anarquistas de Barcelona controlan los espacios públicos de una ciudad tan vasta, y cómo la
                administran siguiendo sus principios libertarios, modificando costumbres cotidianas y hábitos de vida
                entre
                la
                población civil, para establecer incluso en esos ámbitos el anarquismo. Luego Orwell narra su vida en el
                frente
                desde enero (Alcubierre) a mayo de 1937, siendo que el 20 de mayo es herido en el frente de Aragón por
                un
                fusilero sublevado y es enviado de vuelta a Barcelona.
            </p>
        </article>
        <br>
        <article id="cutulu">
            <section>
                <h2>
                    La llamada de Cthulhu
                </h2>
                <figure>
                    <img src="images/libros/cutulu.jpg">
                </figure>
                Autor: <a href="autores.php#lovecraft">H.P. Lovecraft</a> <br>
                Año: 1928
            </section>
            <br>
            <p>
                La historia está compuesta por dos narrativas principales vinculadas por una tercera, la voz del
                «autor».
                Solo
                el autor es capaz de interpretar correctamente lo sucedido y es consciente de la importancia de la
                información
                que tiene en su poder, y va narrándolo siguiendo el orden en que él mismo fue descubriendo la verdad.

                Comienza con la muerte de un eminente profesor de la Universidad Brown, Providence, y el estudio de los
                documentos con los que estaba trabajando. Estos incluyen un informe sobre un ataque perpetrado por una
                secta.
                Una investigación sobre los miembros de la secta saca a la luz algunas pistas sobre la horrorosa
                criatura
                que
                veneran, Cthulhu. Este ser, que supuestamente llegó con sus seguidores extraterrestres desde las
                estrellas
                millones de años antes de la aparición del Hombre, ahora descansa en un sueño profundo en su ciudad
                sumergida,
                R'lyeh.

                La segunda parte de la historia empieza con el cuaderno de bitácora del primer oficial de un barco que
                descubre
                la ciudad hundida, pues ésta ha emergido a la superficie en el Océano Pacífico. La ciudad emergió porque
                «las
                estrellas eran propicias» y el tiempo para el despertar de Cthulhu y sus engendros había llegado
            </p>
        </article>
        <br>
        <article id="montañas">
            <section>
                <h2>
                    Las montañas de la locura
                </h2>
                <figure>
                    <img src="images/libros/monañas.jpg">
                </figure>
                Autor: <a href="autores.php#lovecraft">H.P. Lovecraft</a> <br>
                Año: 1930
            </section>
            <br>
            <p>
                La historia detalla los eventos de una desastrosa expedición a la Antártida en septiembre de 1930, y lo
                que
                encuentra allí un grupo de exploradores dirigido por el narrador, el Dr. William Dyer de la Universidad
                de
                Miskatonic. A lo largo del relato, Dyer detalla una serie de eventos nunca antes contados con la
                esperanza
                de
                disuadir a otro grupo de exploradores que desean regresar al continente. Estos eventos incluyen el
                descubrimiento de una civilización más antigua que la raza humana y la comprensión del pasado de la
                Tierra
                contado a través de varias esculturas y murales.

                La novela tuvo como inspiración el interés de Lovecraft por la exploración antártica; el continente aún
                no
                estaba completamente explorado en la década de 1930. Lovecraft se basa explícitamente en la novela
                inconclusa de
                Edgar Allan Poe La narración de Arthur Gordon Pym, evocada en numerosos pasajes del relato, sobre todo
                en el
                grito: ¡Tekeli-li!, y es posible que haya usado otras historias como inspiración. Muchos elementos de la
                historia, como el "shoggoth" sin forma, se repiten en otras obras de Lovecraft. La historia ha sido
                adaptada
                y
                utilizada en novelas gráficas, videojuegos y obras musicales.
            </p>
        </article>
        <br>
        <article id="laciudad">
            <section>
                <h2>
                    La ciudad sin nombre
                </h2>
                <figure>
                    <img src="images/libros/laciudad.jpg">
                </figure>
                Autor: <a href="autores.php#lovecraft">H.P. Lovecraft</a> <br>
                Año: 1921
            </section>
            <br>
            <p>
                (Dagón y otros cuentos macabros)

                La narración sobre esta ciudad olvidada, que Lovecraft sitúa en medio del desierto de Arabia, se postula
                que
                parece inspirarse en la antigua Irem, la Ciudad de los pilares, que por mucho tiempo se creyó legendaria
                a
                pesar
                de que Las mil y una noches e incluso el Corán se referían a ella como una ciudad de Oriente medio.

                Algunos, igualmente tratan de relacionar esta ciudad con Volubilis, una antigua ciudad romana anclada en
                el
                desierto de Marruecos.
            </p>
        </article>
        <div id="modal" class="hidden">
            <div id="popup" class="hidden">
                <span class="material-symbols-outlined" id="cerrar">close</span>
            </div>
        </div>
        <div class="reloj" id="hastaArriba">
            <a href="libros.php#inicio"><span class="material-symbols-outlined">
                arrow_upward
                </span></a>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 Bookie. All rights reserved.</p>
    </footer>
</body>

</html>