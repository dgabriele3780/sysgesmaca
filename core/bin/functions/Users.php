<?php
//maneja toda la información de los usuarios
function Users(){
  $db= new Conexion();
  $sql=$db->query("SELECT * FROM usuarios;");

  if($db->rows($sql)>0){
    while ($d = $db->recorrer($sql)) {
      $users[$d['id']] = array(
        'id'    =>  $d['id'],
        'user'  =>  $d['user'],
        'nombre'=>  $d['nombre'],
        'nivel' =>  $d['nivel'],
        'isActive'=>$d['isActive']
      );
    }
  }else{
    $users = false;
  }
  $_SESSION['users'] = $users;
  $db->liberar($sql);
  $db->close();

  return $_SESSION['users'];
}

?>
