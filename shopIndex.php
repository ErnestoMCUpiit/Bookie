<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
      // Redirigir al usuario a la página de inicio de sesión
      header("Location: login.php");
      exit(); // Asegurar que se detenga la ejecución del código después de la redirección
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="scripts/script.js" defer></script>
  <link rel="stylesheet" href="styles/shopStyle.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="scss/custom.css">
  <title>Shop</title>
</head>
<body>
  <header>
    <h1 id="titulo">
        <a href="index.php">Bookie</a>
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
    <div class="row row-cols-1 row-cols-lg-3 g-10">
      
        <?php
          foreach($librosObtenidos as $libro) {
            if($librosObtenidos==null){
              echo "errorrrr";
            }
        ?> 
        <?php ?>
        
        <div class="card w-20 p-4 m-5 text-center" >
          <img src="data:image/jpeg;base64,<?php echo base64_encode($libro["imagen"]); ?>" class="card-img-top" alt="...">
          <div class="card-header">
            <p class="card-text"><?php echo $libro["autor"];?></p>
          </div>
          <div class="card-body">
            <h5 class="card-title cardT" ><?php echo $libro["nombre"];?></h5>
          </div>
          
          <ul class="list-group list-group-flush">
            <li class="list-group-item fw-bold fs-2">$ <?php echo $libro["precio"];?></li>
            <li class="list-group-item ids" name="<?php echo $libro["idProducto"] ?>"><?php echo intval($libro["idProducto"]) ?></li>
            <li class="list-group-item">Unidades en existencia: <?php echo $libro["cantidad"];?></li>
          </ul>
          <div class="card-body">
            <input type="number" class="quantity form-control" value="0" min="0" max="<?php echo $libro["cantidad"];?>">
            <button type="button" class="btn btn-primary">Agregar al carrito</a>
          </div>
        </div>
        <?php } ?>
    </div>
      <h2>En venta</h2>
      <form id="formulario" action="model/ventamodel.php" method="POST">
        <aside class="sidebar">
          <h2>Carrito de Compra</h2>
          <hr> <br>
          <div class="items"></div>
          <br>
          <div class="Total">
            <span>Total:</span>
            <span class="total">$0.00</span>
          </div>
          <div class="bottombar">
            <hr><br>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="terminos" required>
                Acepto los términos y condiciones
              </label>
            </div>
            <div class="botones">
              <button class="enviar" type="submit" action=enviarCarrito()>Enviar</button>
              <button class="cancelar" type="button">Cancelar</button>
            </div>
          </div>
        </aside>
      </form>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Bookie. All rights reserved.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>