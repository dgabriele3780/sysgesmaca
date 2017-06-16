<?php
if(!empty($_POST['nombre']) and !empty($_POST['user']) and !empty($_POST['pass'])){
  $db = new Conexion();
  $nombre = $db->real_escape_string($_POST['nombre']);
  $user = $db->real_escape_string($_POST['user']);
  $pass = md5($_POST['pass']);

  $sql = $db->query("SELECT user FROM usuarios WHERE user='$user' LIMIT 1;");
  if($db->rows($sql) == 0) {
    $keyreg=md5(time());
    $link = APP_URL . '?view=activar&key=' . $keyreg.'&email=' . $user;
//Se envia el correo de activacion al usuario
    $mail = new PHPMailer;
    $mail->CharSet = "UTF-8";
    $mail->Encoding = "quoted-printable";
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = PHPMAILER_HOST;                         // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = PHPMAILER_USER;                     // SMTP username
    $mail->Password = PHPMAILER_PASS;                     // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Port = PHPMAILER_PORT;                         // TCP port to connect to
    $mail->setFrom(PHPMAILER_USER, APP_TITLE);            // Quien manda el correo?
    $mail->addAddress($user, $nombre);                    // A quien le llega
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Activación de tu cuenta';
    $mail->Body = EmailTemplate($nombre,$link);
    $mail->AltBody = 'Hola ' . $nombre . ' para activar tu cuenta accede al siguiente elance: ' . $link;

    if(!$mail->send()) {

        $html = '<div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>ERROR!</strong> '.$mail->ErrorInfo.'
        </div>';
    } else {
      $sql2= $db->query("INSERT INTO usuarios (user, pass, nombre,keyreg) VALUES ('$user', '$pass', '$nombre','$keyreg');");
      // $db->liberar($sql2);
      $html=1;
    }
  }else{
    $html = '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>ERROR!</strong> El correo ya está registrado.
  </div>';
  }
// $db->liberar($sql);
}else{
  $html = '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>ERROR!</strong> Datos vacios.
  </div>';
}
$db->close();
echo $html;
?>
