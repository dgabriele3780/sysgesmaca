<?php
$db = new Conexion();
$sql = $db->query("SELECT * FROM clientes;");
if($db->rows($sql) > 0) {
  // crear la tabla de clientes
  $tbClientes='
  <table id="tbclientes" class="table table-striped table-bordered">
  <thead>
  <tr>
  <th>RIF</th>
  <th>NOMBRE</th>
  <th>CORREO</th>
  <th>Acciones</th>
  </tr>
  </thead><tbody>';
  while($data=$db->recorrer($sql)){
    $tbClientes.='  <tr>
    <td>'.$data['rif'].'</td>
    <td>'.$data['nombres'].'</td>
    <td>'.$data['correo'].'</td>
    <td>
    <button class="btn btn-success btn-rounded btn-sm" data-toggle="modal" data-target=".detallesC" title="Detalles" onclick="detallesC('.$data['id'].')"><i class="glyphicon glyphicon-search"></i></button>
    <button class="btn btn-warning btn-rounded btn-sm" title="Editar" onclick="editarC('.$data['id'].')"><i class="glyphicon glyphicon-pencil"></i></button>
    </td>
    </tr>';
  }
  $tbClientes.='</tbody></table>';
} else {
  // aun no hay clientes registrados
  $tbClientes=
  '<div class="alert alert-warning">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  Aún no hay registros de clientes.
  </div>';
}
$db->liberar($sql);
$db->close();

include('html/clientes/clientes.php');

?>
