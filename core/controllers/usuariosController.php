<?php

$db= new Conexion();
$sql=$db->query("SELECT * FROM usuarios;");
$list_users='';
if($db->rows($sql)>0){
  $list_users.='<table class="table table-striped ">';
  $list_users.='<thead><tr>
      <th>id</th>
      <th>Correo</th>
      <th>Nombre</th>
      <th>Nivel</th>
      <th>Acciones</th>
  </tr></thead><tbody>';
  $i=1;
  while ($d = $db->recorrer($sql)) {
    $list_users.='<tr>';
    $list_users.='<td>'.$i.'</td>';
    $list_users.='<td>'.$d['user'].'</td>';
    $list_users.='<td>'.$d['nombre'].'</td>';
    $list_users.='<td>';
switch ($d['nivel']){
  case 0:
    $list_users.= 'Administrador';
  break;
  case 1:
    $list_users.= 'Analista';
  break;
  case 2:
    $list_users.= 'Cliente';
  break;
}
  $list_users.='</td>';
  $list_users.='<td class="table-action">
    <a href="" data-toggle="tooltip" title="Editar" class="tooltips"><i class="fa fa-pencil"></i></a>
    <a href="" data-toggle="tooltip" title="Borrar" class="delete-row tooltips"><i class="fa fa-trash-o"></i></a>
  </td></tr>';


$i++;
  }
  $list_users.='</tbody></table>';
}else{
  $list_users = false;
}

$db->liberar($sql);
$db->close();
include('html/usuarios/listado.php');

?>
