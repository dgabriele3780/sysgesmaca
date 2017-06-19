function DataEdit(e){
  var id = e;
  var Objeto = new Object();
  Objeto.id = id;
  var data= {id:Objeto};
  $.post('ajax.php?mode=datausuario',data,
  function(data){
    if(data.valid==true){
      var respuesta;
      respuesta = JSON.parse(data.respuesta);
      $('#nombre_edit').val(respuesta[id].nombre);
      $('#usuario_edit').val(respuesta[id].user);
      $('#select-nivel option[value="' + respuesta[id].nivel + '"]').prop('selected', true);
      $('#guardardatos').attr("onclick", 'return goEditarU('+ id +')');
    }
    else
    {
      result = '<div class="alert alert-dismissible alert-warning">';
      result += '<button type="button" class="close" data-dismiss="danger">&times;</button>';
      result += '<h4><strong>ERROR!</strong></h4>';
      result += '<p>Ocurrió un error en la consulta.</p>';
      result += '</div>';
      __('__AJAX_EDITAR__').innerHTML = result;
    }
  },"json");
}
function goEditarU(e){
  var id = e;
  var Objeto = new Object();
  Objeto.id = id;
  Objeto.nombre = $('#nombre_edit').val();
  Objeto.correo = $('#usuario_edit').val();
  Objeto.clave = $('#clave_edit').val();
  Objeto.nivel = $('#select-nivel option:selected' ).val();
  var data= {user:Objeto};
  $.post('ajax.php?mode=editusuario',data,
  function(data){
    if(data.valid==true){
      var result;
      result = '<div class="alert alert-dismissible alert-success">';
      result += '<button type="button" class="close" data-dismiss="danger">&times;</button>';
      result += '<h4><strong>EXITO!</strong></h4>';
      result += '<p>Se modificó el usuario.</p>';
      result += '</div>';
      __('__AJAX_EDITAR__').innerHTML = result;
      location.href = "?view=usuarios";
    }
    else{
      var msg = JSON.parse(data.respuesta);
      var result;
      switch (msg) {
        case 0:
        result = '<div class="alert alert-dismissible alert-warning">';
        result += '<button type="button" class="close" data-dismiss="danger">&times;</button>';
        result += '<h4><strong>Alerta!</strong></h4>';
        result += '<p>No se modificó el usuario.</p>';
        result += '</div>';
        break;
        case -1:
        result = '<div class="alert alert-dismissible alert-danger">';
        result += '<button type="button" class="close" data-dismiss="danger">&times;</button>';
        result += '<h4><strong>Error!</strong></h4>';
        result += '<p>Ocurrió un error en la consulta.</p>';
        result += '</div>';
        break;
        case -2:
        result = '<div class="alert alert-dismissible alert-danger">';
        result += '<button type="button" class="close" data-dismiss="danger">&times;</button>';
        result += '<h4><strong>Error!</strong></h4>';
        result += '<p>Ya existe un correo igual registrado.</p>';
        result += '</div>';
        break;
      }
      __('__AJAX_EDITAR__').innerHTML = result;
    }
  },"json");
}
