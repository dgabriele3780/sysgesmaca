jQuery(document).ready(function(){
  jQuery('#tbclientes').DataTable({
    language:  {
      "sProcessing":     "Procesando...",
      "sLengthMenu":     "Mostrar _MENU_ registros",
      "sZeroRecords":    "No se encontraron resultados",
      "sEmptyTable":     "Ningún dato disponible en esta tabla",
      "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix":    "",
      "sSearch":         "Buscar:",
      "sUrl":            "",
      "sInfoThousands":  ",",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
      },
      "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }
    },
    responsive: true
  });
  $("#telefonos").remove();
  $("#addTelefono").click(function(){
    var i;
    $("#telefonos").append('<input type="text" class="form-control">');
  });
});
function editarC(e){
  var id=e;
  var Objeto = new Object();
  Objeto.id = id;
  var data= {id:Objeto};
  $.post('ajax.php?mode=datacliente',data,
  function(data){
    if(data.valid==true){
      var respuesta, telefonos;
      respuesta = JSON.parse(data.respuesta);
      telefonos = JSON.parse(data.telefonos);

      $('#nombresE').val(respuesta[id].nombres);
      $('#rifE').val(respuesta[id].rif);
      $('#correoE').val(respuesta[id].correo);
      $('#direccionE').html(respuesta[id].direccion);

      var trs=$("#telefonoC tr").length;
      while(trs>1){
        $('#telefonoC tr:last').remove();
        trs--;
      }
      var contenido='';
      $.each(telefonos, function(i, item) {
        contenido=contenido+"<tr><td>"+item.tipo+"</td><td>"+item.numero+"<td></tr>";
      });
      if(contenido == ''){
        contenido="<tr><td>No hay numeros registrados</td></tr>"
      }
      $('#telefonoC').append(contenido);
    }
    else
    {
      result = '<div class="alert alert-dismissible alert-warning">';
      result += '<button type="button" class="close" data-dismiss="danger">&times;</button>';
      result += '<h4><strong>ERROR!</strong></h4>';
      result += '<p>Ocurrió un error en la consulta.</p>';
      result += '</div>';
      __('__AJAX_DETALLES__').innerHTML = result;
    }
  },"json");
}
function detallesC(e){
  var id=e;
  var Objeto = new Object();
  Objeto.id = id;
  var data= {id:Objeto};
  $.post('ajax.php?mode=datacliente',data,
  function(data){
    if(data.valid==true){
      var respuesta, telefonos;
      respuesta = JSON.parse(data.respuesta);
      telefonos = JSON.parse(data.telefonos);

      $('#tituloC').html(respuesta[id].nombres);
      $('#rifC').html(respuesta[id].rif);
      $('#correoC').html(respuesta[id].correo);
      $('#direccionC').html(respuesta[id].direccion);

      var trs=$("#telefonoC tr").length;
      while(trs>1){
        $('#telefonoC tr:last').remove();
        trs--;
      }
      var contenido='';
      $.each(telefonos, function(i, item) {
        contenido=contenido+"<tr><td>"+item.tipo+"</td><td>"+item.numero+"<td></tr>";
      });
      if(contenido == ''){
        contenido="<tr><td>No hay numeros registrados</td></tr>"
      }
      $('#telefonoC').append(contenido);
    }
    else
    {
      result = '<div class="alert alert-dismissible alert-warning">';
      result += '<button type="button" class="close" data-dismiss="danger">&times;</button>';
      result += '<h4><strong>ERROR!</strong></h4>';
      result += '<p>Ocurrió un error en la consulta.</p>';
      result += '</div>';
      __('__AJAX_DETALLES__').innerHTML = result;
    }
  },"json");

}
