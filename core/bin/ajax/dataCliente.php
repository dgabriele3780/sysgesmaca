<?php

if(!empty($_POST['id'])){
  $db = new Conexion();
  $id = $_POST['id']['id'];
  $sql = $db->query("SELECT * FROM clientes WHERE id='$id' LIMIT 1;");
  if($d=$db->rows($sql) > 0) {
    while ($d = $db->recorrer($sql)) {
      $u[$d['id']] = array(
        'id'    =>  $d['id'],
        'rif'  =>  $d['rif'],
        'nombres'=>  $d['nombres'],
        'direccion' =>  $d['direccion'],
        'correo' =>  $d['correo']
      );
    }
    $data['valid']=true;
  }else{
    $data['valid']=false;
    $u = 0;
  }
  $u=json_encode($u);

  $sql = $db->query("SELECT * FROM telefonos_cliente WHERE cliente_id='$id';");
  if($d=$db->rows($sql) > 0) {
    while ($d = $db->recorrer($sql)) {
      $t[$d['id']] = array(
        'tipo'    =>  $d['tipo'],
        'numero'  =>  $d['numero']
      );
    }
  }else{
    $t = 0;
  }
  $t=json_encode($t);

  $db->liberar($sql);
  $db->close();

  $data['respuesta']=$u;
  $data['telefonos']=$t;
  echo json_encode($data);
}
?>
