<!DOCTYPE html>
  <html>

  <head>
  <title>Login</title>
  <link rel="stylesheet" href="styles/reset.css">
  <link rel="stylesheet" type="text/css" href="styles/loginStyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="scss/custom.css">

</head>

<body>
  <main>
    
    <div class="container-fluid container">
      <form method="POST" action="model/loginModel.php">
        <h2>Iniciar sesión</h2>
        <label >Nombre de usuario:</label>
        <input type="text" id="username" name="username" required>
        <label >Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" name="ingresar">
        <label>¿No tienes una cuenta?, <a href="register.php">Registrate</a></label>
      </form>
    </div>
    
    <div class="modal fade" id="errorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="errorModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Error de inicio de sesion</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p id="cont">Usuario o contraseña incorrecta, si no has creado una cuenta, <a href="register.php">Registrate</a></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Entendido</button>
          </div>
        </div>
      </div>
    </div>
    
  </main>
  <footer>
    <p>&copy; 2023 Bookie. All rights reserved.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script>var urlParams = new URLSearchParams(window.location.search);

var loginErrorModal = new bootstrap.Modal(document.getElementById('errorModal'));
var messa=document.getElementById('cont');
var tit=document.getElementById('staticBackdropLabel');
var lik=document.getElementById('sig');

if (urlParams.get('error') === '1') {
    // Mostrar la ventana modal de error de inicio de sesión
    loginErrorModal.show();
}
else if(urlParams.get('error') === '2'){
    messa.innerText="el usuario ya existe en la base de datos";
    loginErrorModal.show();
}
else if(urlParams.get('error') === '3'){
    tit.innerText="Contraseña incorrecta";
    messa.innerText="La confirmacion de contraseñas es erronea";
}
else if (urlParams.get('exito') === '1'){
    
    tit.innerText="Registro exitoso";
    messa.innerText="para ingresar, ";
    lik.innerText="Inicia sesión";
    lik.href="login.php"
    loginErrorModal.show();
}</script>  
</body>
</html>