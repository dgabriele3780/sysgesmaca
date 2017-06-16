<?php include(HTML_DIR.'overall/header.html'); ?>
<?php include(HTML_DIR.'overall/topnav.html'); ?>
<section>
  <div class="mainwrapper">
    <?php include(HTML_DIR.'overall/leftpanel.html'); ?>
    <div class="mainpanel">
      <div class="pageheader">
        <div class="media">
          <div class="pageicon pull-left">
            <i class="fa fa-dollar"></i>
          </div>
          <div class="media-body">
            <ul class="breadcrumb">
              <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
              <li>Facturas</li>
            </ul>
            <h4>Nueva Factura</h4>
          </div>
        </div><!-- media -->
      </div><!-- pageheader -->
        <div class="contentpanel">
          <br>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">Crear una nueva factura</h4>
                </div><!-- panel-heading -->
                <div class="panel-body nopadding">
                  <br>
                  <div class="form-group col-sm-3">
                    <label class="control-label">Cliente</label>
                    <input type="text"  class="form-control" />
                  </div>
                  <div class="col-sm-3">
                    <label>Fecha</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div><!-- input-group -->
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label class="control-label">Factura #</label>
                      <input type="text"  class="form-control" />
                    </div><!-- form-group -->
                  </div><!-- col-sm-6 -->
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label class="control-label">Control #</label>
                      <input type="text" class="form-control" value="0005"/>
                    </div><!-- form-group -->
                  </div><!-- col-sm-6 -->
                </div><!-- panel-body -->
              </div><!-- panel -->
            </div><!-- col-md-6 -->
          </div>

          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-success">Agregar productos</button>
            </div>
            <br>
          </div>

        </div><!-- contentpanel -->
    </div><!-- mainpanel -->
  </div><!-- mainwrapper -->
</section>
<?php include(HTML_DIR.'overall/footer.html');?>
