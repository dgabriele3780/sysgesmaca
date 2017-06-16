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
    default:
      header('location: index.php');
    break;
  }
} else {
  header('location: index.php');
}
?>
