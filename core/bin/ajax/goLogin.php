<?php

if(!empty($_POST['user']) and !empty($_POST['pass'])){
  $db = new Conexion();
  $user = $db->real_escape_string($_POST['user']);
  $pass = md5($_POST['pass']);
  $sql = $db->query("SELECT id FROM usuarios WHERE user='$user' AND pass='$pass' LIMIT 1;");
  if($db->rows($sql) > 0) {
    if($_POST['sesion']) { ini_set('session.cookie_lifetime', time() + (60*60*24)); }
    $_SESSION['app_id'] = $db->recorrer($sql)[0];
    $_SESSION['time_online'] = time() - (60*6);
    echo 1;
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
