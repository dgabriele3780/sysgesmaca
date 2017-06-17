<?php
$list_users.='<table class="table table-striped ">';
$list_users.='<thead><tr>
<th>id</th>
<th>Nombre</th>
<th>Correo</th>
<th>Nivel</th>
<th>Acciones</th>
</tr></thead><tbody>';
// $i=1;

foreach($_SESSION['users'] as $clave=>$valor){
  $list_users.='<tr>';
  $list_users.= '<td>'.$valor['id'].'</td>';
  $list_users.= '<td>'.$valor['nombre'].'</td>';
  $list_users.= '<td>'.$valor['user'].'</td>';
  $list_users.= '<td>';
  switch ($valor['nivel']){
    case 0:
    $list_users.='Administrador';
    break;
    case 1:
    $list_users.='Analista';
    break;
    case 2:
    $list_users.='Cliente';
    break;
  }
  $list_users.= '</td>';
  $list_users.='<td class="table-action">
  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".editarU" title="Editar" onclick="DataEdit('.$valor['id'].')"><i class="fa fa-pencil"></i></button>
  <a href="" data-toggle="tooltip" title="Borrar" class="delete-row tooltips"><i class="fa fa-trash-o"></i></a>
  <a href="" data-toggle="tooltip" title="Activar Usuario" class="tooltips"><i class="fa fa-unlock"></i></a>
  </td></tr>';
}
$list_users.='</tbody></table>';
include('html/usuarios/listado.php');
?>
