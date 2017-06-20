<?php include(HTML_DIR.'overall/header.html'); ?>
<?php include(HTML_DIR.'overall/topnav.html'); ?>
<section>
  <div class="mainwrapper">
    <?php include(HTML_DIR.'overall/leftpanel.html'); ?>
    <div class="mainpanel">
      <div class="pageheader">
        <div class="media">
          <div class="pageicon pull-left">
            <i class="fa fa-user"></i>
          </div>
          <div class="media-body">
            <ul class="breadcrumb">
              <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
              <li>Contactos / Clientes</li>
            </ul>
            <h4>Listado de clientes</h4>
          </div>
        </div><!-- media -->
      </div><!-- pageheader -->
      <div class="contentpanel">
        <!-- Insertar la tabla de clientes construida en el controller -->
        <?php echo $tbClientes; ?>
      </div><!-- contentpanel -->
    </div><!-- mainpanel -->
  </div><!-- mainwrapper -->
</section>
<!-- Ventana Modal->Detalles clientes -->
<div class="modal fade detallesC" tabindex="-1" role="dialog" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Mensajes al usuario -->
      <div id="__AJAX_DETALLES__"></div>
      <!-- /Mensajes al usuario -->
      <div class="modal-header">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
        <h4 class="modal-title">
          <div id='tituloC'></div>
        </h4>
      </div>
      <div class="modal-body">
        <div role="form">
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group mb15">
                <span class="input-group-addon"><i class="fa  fa-tag"></i></span>
                <input type="text" class="form-control" id="rifC">

              </div><!-- input-group -->
            </div>
            <div class="col-sm-6">
              <div class="input-group mb15">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" id="correoC">
              </div><!-- input-group -->
            </div>
          </div><!-- row -->
          <br />
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group mb15">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <textarea class="form-control" id="direccionC"></textarea>
              </div><!-- input-group -->
            </div>
            <div class="col-sm-6">
              <div class="input-group mb15">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                <table id="telefonoC" class="table">
                  <tr></tr>
                </table>
              </div><!-- input-group -->
            </div>
          </div><!-- row -->
          <br />
          <div class="clearfix">
            <div class="pull-right">
              <button aria-hidden="true" data-dismiss="modal" class="btn btn-success" type="button">Volver<i class="fa  fa-times-circle ml5"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /Ventana Modal->Detalles clientes -->

<?php include(HTML_DIR.'overall/footer.html');?>
