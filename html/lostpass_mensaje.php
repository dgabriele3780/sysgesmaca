<?php include(HTML_DIR . 'overall/header.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>


<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <div class="alert alert-dismissible alert-success">
      <strong>Contraseña cambiada!</strong> se ha generado una nueva contraseña <strong><?php echo $new_pass ?></strong> , prueba <a data-toggle="modal" data-target="#Login">iniciar sesión</a> con ella y podrás cambiarla luego.
  </div>

</div>
</section>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
