<?php

if(!empty($_POST['id'])){
  $db = new Conexion();
  $id = $_POST['id']['id'];
  $sql = $db->query("SELECT * FROM usuarios WHERE id='$id' LIMIT 1;");
  if($d=$db->rows($sql) > 0) {
    while ($d = $db->recorrer($sql)) {
      $u[$d['id']] = array(
        'id'    =>  $d['id'],
        'user'  =>  $d['user'],
        'nombre'=>  $d['nombre'],
        'nivel' =>  $d['nivel']
      );
    }
    $u=json_encode($u);
    $data['valid']=true;
  }else{
    // REVISAR ESTA PARTE, LOS MENSAJES HAY QUE CAMBIARLOS DE POSICION
    $data['valid']=false;
    $u = '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>ERROR!</strong> Datos incorrectos.
    </div>';
  }
  $db->liberar($sql);
  $db->close();
}else{
  $data['valid']=false;
  $u = '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>ERROR!</strong> Datos vacios.
  </div>';
}
$data['respuesta']=$u;
echo json_encode($data);
?>
