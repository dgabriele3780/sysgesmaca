function goRegistro(){
  var connect, form, response, result, nombre, user, pass, pass_conf, term;
  nombre = __('nombre_reg').value;
  user = __('usuario_reg').value;
  pass = __('clave_reg').value;
  pass_conf = __('clave_reg_conf').value;
  term = __('terminos').checked ? true : false;
// El usuario debe aceptar los terminos y condiciones para continuar
  if(term){
// Se valida que los campos no estén vacios
    if(nombre != '' && user != '' && pass != '' && pass_conf != ''){
// verificar que las claves sean iguales
      if(pass === pass_conf){
        form = 'nombre='+nombre+'&user='+user+'&pass='+pass;
        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        connect.onreadystatechange = function (){
          if(connect.readyState == 4 && connect.status == 200){
// Proceso de Registro exitoso
            if(connect.responseText == 1){
              result = '<div class="alert alert-dismissible alert-success">';
              result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
              result += '<h4><strong>EXITO!</strong></h4>';
              result += '<p>Ya estas registrado. Revisa tu email para activar tu cuenta.</p>';
              result += '</div>';
              __('__AJAX_REGISTRO__').innerHTML = result;
// Redireccionamiento
              location.href = "?view=login";
            }else{
              __('__AJAX_REGISTRO__').innerHTML = connect.responseText;
            }
          }else if(connect.readyState !=4){
// Mensaje al usuario
            result = '<div class="alert alert-dismissible alert-warning">';
            result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
            result += '<h4><strong>ESPERA!</strong></h4>';
            result += '<p>Estamos procesando tu registro.</p>';
            result += '</div>';
            __('__AJAX_REGISTRO__').innerHTML = result;
          }
        }
        connect.open('POST','ajax.php?mode=registro', true);
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        connect.send(form);
      }else{
// Mensaje al usuario
        result = '<div class="alert alert-dismissible alert-danger">';
        result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        result += '<h4><strong>ERROR!</strong></h4>';
        result += '<p>Verifica que las claves sean iguales.</p>';
        result += '</div>';
        __('__AJAX_REGISTRO__').innerHTML = result;
      }
    }else{
// Mensaje al usuario
      result = '<div class="alert alert-dismissible alert-danger">';
      result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      result += '<h4><strong>ERROR!</strong></h4>';
      result += '<p>Verifica que los datos no estén vacios.</p>';
      result += '</div>';
      __('__AJAX_REGISTRO__').innerHTML = result;
    }
  }else{
// Mensaje al usuario
    result = '<div class="alert alert-dismissible alert-danger">';
    result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    result += '<h4><strong>ERROR!</strong></h4>';
    result += '<p>Debes aceptar los términos y condiciones. Toma tu tiempo y lee el apartado.</p>';
    result += '</div>';
    __('__AJAX_REGISTRO__').innerHTML = result;
  }
}
function runRegistro(e){
  if(e.keyCode == 13){
    goRegistro();
  }
}
