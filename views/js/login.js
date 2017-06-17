function goLogin(){
  var connect, form, response, result, user, pass, sesion;
  user = __('usuario').value;
  pass = __('clave').value;
  sesion = __('sesion').checked ? true : false;
  form = 'user='+user+'&pass='+pass+'&sesion='+sesion;
  connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  connect.onreadystatechange = function (){
    if(connect.readyState == 4 && connect.status == 200){
      // Proceso de logueo
      if(connect.responseText == 1){
        result = '<div class="alert alert-dismissible alert-success">';
        result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        result += '<h4><strong>EXITO!</strong></h4>';
        result += '<p>Vamos a la aplicación.</p>';
        result += '</div>';
        __('__AJAX_LOGIN__').innerHTML = result;
        // Redireccionamiento
        location.href = "?view=home";
      }else{
        __('__AJAX_LOGIN__').innerHTML = connect.responseText;
      }
    }else if(connect.readyState !=4){
      // Mensaje al usuario
      result = '<div class="alert alert-dismissible alert-warning">';
      result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      result += '<h4><strong>ESPERA!</strong></h4>';
      result += '<p>Te estamos conectando al servidor.</p>';
      result += '</div>';
      __('__AJAX_LOGIN__').innerHTML = result;
    }
  }
  connect.open('POST','ajax.php?mode=login', true);
  connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  connect.send(form);
}
function runLogin(e){
  if(e.keyCode == 13){
    goLogin();
  }
}
