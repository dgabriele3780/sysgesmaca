<?php
// Manejo de peticiones AJAX
if($_POST) {
  require('core/core.php');
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'login':
      require('core/bin/ajax/goLogin.php');
    break;
    case 'registro':
      require('core/bin/ajax/goRegistro.php');
    break;
    case 'recuperar':
      require('core/bin/ajax/goRecuperar.php');
    break;
    case 'datausuario':
      require('core/bin/ajax/dataUsuario.php');
    break;
    case 'editusuario':
      require('core/bin/ajax/editUsuario.php');
    break;
    case 'eliminausuario':
      require('core/bin/ajax/eliminaUsuario.php');
    break;
    case 'activarusuario':
      require('core/bin/ajax/activarUsuario.php');
    break;
    case 'datacliente':
      require('core/bin/ajax/dataCliente.php');
    break;

    default:
      header('location: index.php');
    break;
  }
} else {
  header('location: index.php');
}
?>
