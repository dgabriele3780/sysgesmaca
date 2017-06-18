function DataEdit(e){
  var id=e;
  __('nombre_edit').value="";
  __('usuario_edit').value="";
  __('clave_edit').value="";

  form = 'id='+id;

  connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  connect.onreadystatechange = function (){
    if(connect.readyState == 4 && connect.status == 200){
      // Proceso de logueo
      if(connect.responseText == 1){


        __('__AJAX_EDITAR__').innerHTML = result;
        // Redireccionamiento
        // location.href = "?view=home";
      }else{
        __('__AJAX_LOGIN__').innerHTML = connect.responseText;
      }
    }else if(connect.readyState !=4){
      // Mensaje al usuario
      // result = '<div class="alert alert-dismissible alert-warning">';
      // result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      // result += '<h4><strong>ESPERA!</strong></h4>';
      // result += '<p>Te estamos conectando al servidor.</p>';
      // result += '</div>';
      // __('__AJAX_LOGIN__').innerHTML = result;
    }
  }
  connect.open('POST','ajax.php?mode=datausuario', true);
  connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  connect.send(form);
}
function runEditarU(e){
  if(e.keyCode == 13){
    goEditarU();
  }
}
