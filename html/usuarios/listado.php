<?php include(HTML_DIR.'overall/header.html'); ?>
<?php include(HTML_DIR.'overall/topnav.html'); ?>
<section>
  <div class="mainwrapper">
    <?php include(HTML_DIR.'overall/leftpanel.html'); ?>
    <div class="mainpanel">
      <div class="pageheader">
        <div class="media">
          <div class="pageicon pull-left">
            <i class="fa fa-users"></i>
          </div>
          <div class="media-body">
            <ul class="breadcrumb">
              <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
              <li>Usuarios</li>
            </ul>
            <h4>Lista de usuarios</h4>
          </div>
        </div><!-- media -->
      </div><!-- pageheader -->
      <div class="contentpanel">
        <br>

        <div class="table-responsive">
          <?php echo $list_users; ?>
        </div>

      </div><!-- contentpanel -->
    </div><!-- mainpanel -->
  </div><!-- mainwrapper -->
</section>
<!-- Modal para editar registro -->
<div class="modal fade editarU" tabindex="-1" role="dialog" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Mensajes al usuario -->
      <div id="__AJAX_EDITAR__"></div>
      <!-- /Mensajes al usuario -->
      <div class="modal-header">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
        <h4 class="modal-title">Edición del Usuario</h4>
      </div>
      <div class="modal-body">
        <div role="form" onkeypress="return runEditarU(event)">
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group mb15">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" id="nombre_edit" value="">
              </div><!-- input-group -->
            </div>
            <div class="col-sm-6">
              <div class="input-group mb15">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" id="usuario_edit" value="">
              </div><!-- input-group -->
            </div>
          </div><!-- row -->
          <br />
          <div class="row">
            <div class="col-sm-6">
              <div class="input-group mb15">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" placeholder="Ingrese su clave" id="clave_reg" required>
              </div><!-- input-group -->
            </div>
            <div class="col-sm-6">
              <div class="input-group mb15">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <select>
                  <<option value="0">Administrador</option>
                  <<option value="1">Analista</option>
                  <<option value="2">Cliente</option>
                </select>
              </div><!-- input-group -->
            </div>
          </div><!-- row -->
          <br />
          <div class="clearfix">
            <div class="pull-left">
              <div class="ckbox ckbox-primary mt5">
                <input type="checkbox" id="terminos" value="1">
                <label>Enviar Email al usuario</label>
              </div>
            </div>
            <div class="pull-right">
              <button type="button" class="btn btn-success" onclick="return goEditarU()">Guardar cambios<i class="fa fa-angle-right ml5"></i></button>
              <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger" type="button">Cancelar<i class="fa  fa-times-circle ml5"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Modal para editar registro -->

<?php include(HTML_DIR.'overall/footer.html');?>
