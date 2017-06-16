<?php
if(isset($_GET['key']) && isset($_GET['email'])) {
  $db = new Conexion();
  $key = $db->real_escape_string($_GET['key']);
  $user = $db->real_escape_string($_GET['email']);
  $sql = $db->query("SELECT id FROM usuarios WHERE user='$user' AND keyreg='$key' LIMIT 1;");
// verifica la cuenta para activarla
  if($db->rows($sql) > 0) {
    $db->query("UPDATE usuarios SET isActive='1', keyreg='' WHERE user='$user';");
    header('location: ?view=login&activado=true');
  } else {
    header('location: ?view=login&activado=false');
  }
  $db->liberar($sql);
  $db->close();
} else {
  include('html/error/activacion.html');
}
?>
