<?php include(HTML_DIR.'overall/header.html'); ?>
<?php include(HTML_DIR.'overall/topnav.html'); ?>
<section>
    <div class="mainwrapper">
      <?php include(HTML_DIR.'overall/leftpanel.html'); ?>
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="glyphicon glyphicon-th-large"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                            <li>Productos</li>
                        </ul>
                        <h4>Categorias</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            <div class="contentpanel">
              <br>
<!-- CONTENIDO -->
              <div class="col-md-12">
                <h5 class="lg-title mb5">Listado de las categorías</h5>
                <p class="mb20">asociadas a los productos registrados</p>
                <p ><button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Nueva categoría</button></p>
                <div class="table-responsive">
                  <table class="table table-hidaction table-hover mb30">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Categoría</th>
                        <th>Descripción</th>
                        <th>Registrados</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Harinas</td>
                        <td>Harina de consumo humano, de maíz, trigo y arroz</td>
                        <td>5</td>
                        <td class="table-action-hide">
                          <a href="" data-toggle="tooltip" title="Editar" class="tooltips"><i class="fa fa-pencil"></i></a>
                          <a href="" data-toggle="tooltip" title="Borrar" class="delete-row tooltips"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Limpieza</td>
                        <td>Productos de limpieza del hogar</td>
                        <td>12</td>
                        <td class="table-action-hide">
                          <a href="" data-toggle="tooltip" title="Editar" class="tooltips"><i class="fa fa-pencil"></i></a>
                          <a href="" data-toggle="tooltip" title="Borrar" class="delete-row tooltips"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Enlatados</td>
                        <td>Categoria de enlatados</td>
                        <td>2</td>
                        <td class="table-action-hide">
                          <a href="" data-toggle="tooltip" title="Editar" class="tooltips"><i class="fa fa-pencil"></i></a>
                          <a href="" data-toggle="tooltip" title="Borrar" class="delete-row tooltips"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- col-md-6 -->
<!-- /CONTENIDO -->
            </div><!-- contentpanel -->
        </div><!-- mainpanel -->
    </div><!-- mainwrapper -->
</section>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
          <div class="modal-header">
              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
              <h4 class="modal-title">Crear nueva categoría</h4>
          </div>
          <div class="modal-body">
            <form class="form-inline" action="#">
              <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" class="form-control" id="categoria">
              </div><!-- form-group -->
              <div class="form-group">
                  <label>Descripción</label>
                  <input type="text" class="form-control" id="descripcion">
              </div><!-- form-group -->
              <br><br><br>
              <button type="button" class="btn btn-primary">Guardar</button>
              <button type="reset" class="btn btn-default">Borrar</button>
            </form>
          </div>
      </div>
    </div>
</div>
<?php include(HTML_DIR.'overall/footer.html');?>
