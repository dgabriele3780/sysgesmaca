<?php
if(!empty($_POST['user'])){
  $db = new Conexion();
  $id = $_POST['user']['id'];
  $sql = $db->query("DELETE FROM usuarios WHERE id = '$id';");

  $db->close();
  $data['valid']=true;

  echo json_encode($data);
}else{
  $data['valid']=false;
  echo json_encode($data);
}
?>
