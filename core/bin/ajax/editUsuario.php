<?php
if(!empty($_POST['user'])){
  $db = new Conexion();
  $id = $_POST['user']['id'];
  $nombre = $_POST['user']['nombre'];
  $correo = $_POST['user']['correo'];
  $nivel = $_POST['user']['nivel'];
  if ($_POST['user']['clave']!=''){
    $clave = md5($_POST['user']['clave']);
  }else{
    $clave = '';
  }

  $sql = $db->query("SELECT user FROM usuarios WHERE user='$correo' AND id <> '$id' LIMIT 1;");
  if($db->rows($sql) == 0) {

    $sql = $db->query("SELECT * FROM usuarios WHERE id='$id' LIMIT 1;");
    $d = $db->recorrer($sql);

    $sql2 = "UPDATE usuarios SET ";

    if($nombre != $d['nombre']){
      $sql2 .= "nombre = '".$nombre."', ";
    }
    if($correo != $d['user']){
      $sql2 .= "user = '".$correo."', ";
    }
    if($nivel != $d['nivel']){
      $sql2 .= "nivel = '".$nivel."', ";
    }
    if($clave != $d['pass'] && $clave !=''){
      $sql2 .= "pass = '".$clave."'";
    }else{
      $sql2 = substr($sql2, 0, -2);
    }
    $sql2 .= " WHERE id='$id';";

    if(strpos($sql2, 'SET')===false){
      $db->liberar($sql);
      $db->close();
      $data['valid']=false;
      $u = 0;
    }else{
      $sql2 = $db->query($sql2);
      $data['valid']=true;
      $u=1;
      $db->close();
    }
  }else{
    $db->liberar($sql);
    $db->close();
    $data['valid']=false;
    $u = -2;
  }
}else{
  $data['valid']=false;
  $u= -1;
}
$data['respuesta']=$u;
echo json_encode($data);
?>
