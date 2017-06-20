<?php
$list_users.='<table class="table table-striped ">';
$list_users.='<thead><tr>
<th>id</th>
<th>Nombre</th>
<th>Correo</th>
<th>Nivel</th>
<th>Acciones</th>
</tr></thead><tbody>';
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
  $list_users.='<td class="table-action">';
  if($_SESSION['app_id']==$valor['id']){
    $list_users.='<button class="btn btn-primary btn-sm" data-toggle="modal" title="No se puede editar" disabled><i class="fa fa-pencil"></i></button>';
    $list_users.='<button class="btn btn-default btn-sm" data-toggle="modal" title="No se puede eliminar" disabled><i class="fa fa-trash-o"></i></button>';
  }else{
    $list_users.='<button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".editarU" title="Editar" onclick="DataEdit('.$valor['id'].')"><i class="fa fa-pencil"></i></button>';
    $list_users.='<button class="btn btn-danger btn-sm" data-toggle="modal" data-target=".borrarU" title="Eliminar" onclick="DataElimina('.$valor['id'].')"><i class="fa fa-trash-o"></i></button>';
    switch ($valor['isActive']){
      case 0:
      $list_users.='<button class="btn btn-success btn-sm" title="Activar usuario" onclick="Activar('.$valor['id'].')"><i class="fa fa-unlock"></i></button></td></tr>';
      break;
      case 1:
      $list_users.='<button class="btn btn-default btn-sm" title="Desactivar usuario" onclick="Activar('.$valor['id'].')"><i class="fa fa-lock"></i></button></td></tr>';
      break;
    }
  }
}
$list_users.='</tbody></table>';
include('html/usuarios/listado.php');
?>
