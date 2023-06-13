var urlParams = new URLSearchParams(window.location.search);

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
}