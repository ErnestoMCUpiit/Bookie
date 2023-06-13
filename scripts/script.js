var addToCartButtons = document.querySelectorAll('.btn.btn-primary');
var librosAgregados = [];
var itemsContainer = document.querySelector('.items');
var totalElement = document.querySelector('.total');
var cartItems = [];


addToCartButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    var card = button.closest('.card');
    var bookId = parseInt(card.querySelector('.list-group-item.ids').textContent);
    var quantityInput = card.querySelector('.quantity');
    var quantity = parseInt(quantityInput.value);


    if (quantity > 0) {
      var bookName = card.querySelector('.card-title').textContent;
      var bookPrice = parseFloat(card.querySelector('.list-group-item').textContent.replace('$', ''));
      console.log(bookId);
      var subtotal = bookPrice * quantity;
      var description = 'ID: ' + bookId + ' - ' + bookName + ' (Cantidad: ' + quantity + ') - Subtotal: $' + subtotal.toFixed(2);

      var libro = {
        idProducto: bookId,
        cantidad: quantity,
        subtotal: subtotal
      };

      cartItems.push(description);
      librosAgregados.push(libro);
      itemsContainer.innerHTML = cartItems.join('<br>');


      var total = cartItems.reduce(function(sum, item) {
        var subtotalMatch = item.match(/Subtotal: \$([\d\.]+)/);
        if (subtotalMatch) {
          var subtotalValue = parseFloat(subtotalMatch[1]);
          return sum + subtotalValue;
        }
        return sum;
      }, 0);
      
      totalElement.textContent = '$' + total.toFixed(2);
      quantityInput.value = '0';
    }

  });
});

var termsCheckbox = document.querySelector('input[name="terminos"]');
termsCheckbox.addEventListener('change', function() {
  if (termsCheckbox.checked) {
    document.querySelector('.enviar').disabled = false;
  } else {
    document.querySelector('.enviar').disabled = true;
  }
});
var enviarButton = document.querySelector('.enviar');
enviarButton.addEventListener('click', function() {
  if (termsCheckbox.checked) {
    enviarCarrito(librosAgregados);
    enviarButton.disabled = false;
  } else {
    enviarButton.disabled = true;
  }
});

var cancelButton = document.querySelector('.cancelar');
cancelButton.addEventListener('click', function() {
  cartItems = [];
  itemsContainer.innerHTML = '';

  // Reiniciar el contenido del campo de total del carrito
  totalElement.textContent = '$0.00';
});

function enviarCarrito(carrito) {
  var formulario = document.getElementById('formulario');
  var input = document.createElement('input');
  input.type = 'hidden';
  input.name = 'cartItems';
  input.value = JSON.stringify(carrito);
  formulario.appendChild(input);
  formulario.submit();
  console.log("AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA");
}

var urlParams = new URLSearchParams(window.location.search);
var exitoModal = new bootstrap.Modal(document.getElementById('exitoVenta'));
var messa=document.getElementById('cont');
var tit=document.getElementById('staticBackdropLabel');

if(urlParams.get('exito') === '1'){
  exitoModal.show;
}