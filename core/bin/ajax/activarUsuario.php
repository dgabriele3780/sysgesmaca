<?php
if(!empty($_POST['user'])){
  $db = new Conexion();
  $id = $_POST['user']['id'];

$sql = $db->query("SELECT isActive FROM usuarios WHERE id = '$id' LIMIT 1;");
$data = $db->recorrer($sql);
$a = ($data[0]==0)?1:0;

  $sql = $db->query("UPDATE usuarios SET isActive='$a', keyreg = null WHERE id = '$id';");

  $db->close();
  $data['valid']=true;

  echo json_encode($data);
}else{
  $data['valid']=false;
  echo json_encode($data);
}
?>
