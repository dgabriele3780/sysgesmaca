<?php
/*
  NUCLEO de la aplicacion
 */
// inicio de sesión
session_start();

 // constantes de la conexion a la base de datos
 define('DB_HOST','localhost');
 define('DB_USER','root');
 define('DB_PASS','winmysql');
 define('DB_NAME','gesmacadb');

 // Contantes de la aplicacion
date_default_timezone_set('America/Caracas');
define('APP_URL', 'http://localhost/sysgesmaca/');
define('HTML_DIR','html/');
define('APP_TITLE', 'GESMACA | Sistema de Inventario, ventas y facturación');
define('APP_COPY', 'Copyright &copy | '.date('Y').'UPTA "Federico Brito Figueroa"');

//Constantes de PHPMailer (envio de correo)
define('PHPMAILER_HOST','p3plcpnl0173.prod.phx3.secureserver.net');
define('PHPMAILER_USER','public@ocrend.com');
define('PHPMAILER_PASS','Prinick2016');
define('PHPMAILER_PORT',465);

//Estructuras
require('vendor/autoload.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Users.php');
require('core/bin/functions/EmailTemplate.php');
require('core/bin/functions/LostpassTemplate.php');

$users = Users();

?>
