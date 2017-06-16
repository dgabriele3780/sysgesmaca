<?php

if(!isset($_SESSION['app_id']) and isset($_GET['key'])) {
  $db = new Conexion();
  $keypass = $db->real_escape_string($_GET['key']);
  $sql = $db->query("SELECT id FROM usuarios WHERE keyreg='$keypass' LIMIT 1;");
  $new_pass = strtoupper(substr(sha1(time()),0,8));
  $new_pass1 = md5($new_pass);
  if($db->rows($sql) > 0) {
    $data = $db->recorrer($sql);
    $id_user = $data[0];

    $db->query("UPDATE users SET keypass='',pass='$new_pass1' WHERE id='$id_user';");
    include('html/lostpass_mensaje.php');
  } else {
    header('location: ?view=login');
  }
  $db->liberar($sql);
  $db->close();
} else {
  header('location: ?view=login');
}

?>
