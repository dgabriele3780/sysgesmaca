<?php

if(!empty($_POST['id'])){
  $db = new Conexion();
  $id = $db->real_escape_string($_POST['id']);

  $sql = $db->query("SELECT * FROM usuarios WHERE id='$id' LIMIT 1;");
  if($db->rows($sql) > 0) {    
    $u[$d['id']] = array(
      'id'    =>  $d['id'],
      'user'  =>  $d['user'],
      'nombre'=>  $d['nombre'],
      'nivel' =>  $d['nivel']
    );
    $data=json_encode($u);
    echo $data;
  }else{
    echo '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>ERROR!</strong> Datos incorrectos.
  </div>';
  }
  $db->liberar($sql);
  $db->close();
}else{
  echo '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>ERROR!</strong> Datos vacios.
  </div>';
}
?>
