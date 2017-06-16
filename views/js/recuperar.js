function goRecuperar(){
  var connect, form, response, result, user;
  user = __('email_recuperar').value;
// Se valida que los campos no estén vacios
  	if(user != ''){
        form = 'user='+user;
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        connect.onreadystatechange = function (){
          if(connect.readyState == 4 && connect.status == 200){
// Proceso de exitoso
            if(connect.responseText == 1){
              result = '<div class="alert alert-dismissible alert-success">';
              result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
              result += '<h4><strong>EXITO!</strong></h4>';
              result += '<p>Se ha enviado las intrucciones para recuperar la cuenta. Revisa tu email y sigue las instrucciones.</p>';
              result += '</div>';
              __('__AJAX_RECUPERAR__').innerHTML = result;
// Redireccionamiento
              location.href = "?view=login";
            }else{
              __('__AJAX_RECUPERAR__').innerHTML = connect.responseText;
            }
          }else if(connect.readyState !=4){
// Mensaje al usuario
            result = '<div class="alert alert-dismissible alert-warning">';
            result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
            result += '<h4><strong>ESPERA!</strong></h4>';
            result += '<p>Estamos procesando tu petición.</p>';
            result += '</div>';
            __('__AJAX_RECUPERAR__').innerHTML = result;
          }
        }
        connect.open('POST','ajax.php?mode=recuperar', true);
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        connect.send(form);

    }else{
// Mensaje al usuario, campo vacio
      result = '<div class="alert alert-dismissible alert-danger">';
      result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      result += '<h4><strong>ERROR!</strong></h4>';
      result += '<p>El campo email no debe estar vacio.</p>';
      result += '</div>';
      __('__AJAX_RECUPERAR__').innerHTML = result;
    }
}
function runRecuperar(e){
  if(e.keyCode == 13){
    goRecuperar();
  }
}
