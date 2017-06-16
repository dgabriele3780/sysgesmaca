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
            <h4>Listado</h4>
          </div>
        </div><!-- media -->
      </div><!-- pageheader -->
      <div class="contentpanel">
        <br>
<!-- CONTENIDO -->
        <div class="col-md-12">
          <h5 class="lg-title mb5">Nuestros Productos</h5>
          <p class="mb20">registrados en el sistema</p>
          <p ><button class="btn btn-primary" data-toggle="modal" data-target=".nuevo-p">+ Nuevo</button></p>
          <div class="table-responsive">
            <table id="basicTable" class="table table-striped table-bordered responsive">
              <thead class="">
                <tr>
                  <th>COD</th>
                  <th>Imagen</th>
                  <th>Item</th>
                  <th>Descripción</th>
                  <th>Existencia</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                 <tr>
                     <td>001</td>
                     <td><img src="views/images/productos/noimagen.jpg" width="60"></td>
                     <td>Harina de maiz</td>
                     <td>Harina de maiz precocido marca CASA</td>
                     <td>25</td>
                     <td> Detalles - Editar - Borrar</td>
                 </tr>
                 <tr>
                     <td>002</td>
                     <td><img src="views/images/productos/noimagen.jpg" width="60"></td>
                     <td>Harina de arroz</td>
                     <td>Harina de arroz precocido</td>
                     <td>11</td>
                     <td> Detalles - Editar - Borrar</td>
                 </tr>
                 <tr>
                     <td>003</td>
                     <td><img src="views/images/productos/noimagen.jpg" width="60"></td>
                     <td>Harina de trigo</td>
                     <td>Harina de trigo leudante</td>
                     <td>5 <span class="label label-warning" title="Existencia baja">!</span></td>
                     <td> Detalles - Editar - Borrar</td>
                 </tr>
                 <tr>
                     <td>004</td>
                     <td><img src="views/images/productos/noimagen.jpg" width="60"></td>
                     <td>Desinfectante DelHogar</td>
                     <td>Desinfectante Lavanda</td>
                     <td>19</td>
                     <td> Detalles - Editar - Borrar</td>
                 </tr>
                 <tr>
                     <td>005</td>
                     <td><img src="views/images/productos/noimagen.jpg" width="60"></td>
                     <td>Desinfectante DelHogar</td>
                     <td>Desinfectante Lima Limon</td>
                     <td>25</td>
                     <td> Detalles - Editar - Borrar</td>
                 </tr>
                 <tr>
                     <td>006</td>
                     <td><img src="views/images/productos/noimagen.jpg" width="60"></td>
                     <td>MultiUso</td>
                     <td>Desengrasante Multiuso, efectivo para cortar la grasa</td>
                     <td>25</td>
                     <td> Detalles - Editar - Borrar</td>
                 </tr>
                 <tr>
                     <td>007</td>
                     <td><img src="views/images/productos/noimagen.jpg" width="60"></td>
                     <td>Harina de cacao</td>
                     <td>Cacao en polvo </td>
                     <td>5 <span class="label label-warning" title="Existencia baja">!</span></td>
                     <td> Detalles - Editar - Borrar</td>
                 </tr>
                 <tr>
                     <td>008</td>
                     <td><img src="views/images/productos/noimagen.jpg" width="60"></td>
                     <td>Toallin Jumbo Tron</td>
                     <td>Toallin individual</td>
                     <td>85</td>
                     <td> Detalles - Editar - Borrar</td>
                 </tr>
                 <tr>
                     <td>009</td>
                     <td><img src="views/images/productos/noimagen.jpg" width="60"></td>
                     <td>Sardina El Corsario</td>
                     <td>Presentacion 125gm</td>
                     <td>31</td>
                     <td> Detalles - Editar - Borrar</td>
                 </tr>
                 <tr>
                     <td>010</td>
                     <td><img src="views/images/productos/noimagen.jpg" width="60"></td>
                     <td>Jurel en lata</td>
                     <td>JUrel entero, presentacion 255gm</td>
                     <td>52</td>
                     <td> Detalles - Editar - Borrar</td>
                 </tr>
                 <tr>
                     <td>011</td>
                     <td><img src="views/images/productos/noimagen.jpg" width="60"></td>
                     <td>Limpia Hornos</td>
                     <td>Poderoso limpiador desengrasante para hornos</td>
                     <td>49</td>
                     <td> Detalles - Editar - Borrar</td>
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
<div class="modal fade nuevo-p" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
              <h4 class="modal-title">Registrar un nuevo producto</h4>
          </div>
          <div class="modal-body">
            <div class="panel-body">
                      <div class="row">
                          <div class="col-sm-2">
                              <div class="form-group">
                                  <label class="control-label">Código</label>
                                  <input type="text" class="form-control" />
                              </div><!-- form-group -->
                          </div><!-- col-sm-6 -->

                          <div class="col-sm-2">
                              <div class="form-group">
                                  <label class="control-label">Cantidad</label>
                                  <input type="text" class="form-control" />
                              </div><!-- form-group -->
                          </div><!-- col-sm-6 -->

                          <div class="col-sm-4">
                              <div class="form-group">
                                  <label class="control-label">Item</label>
                                  <input type="text" name="lastname" class="form-control" />
                              </div>
                          </div>

                          <div class="col-sm-4">
                              <div class="form-group">
                                  <label class="control-label">Descripción</label>
                                  <textarea class="form-control"></textarea>
                              </div><!-- form-group -->
                          </div><!-- col-sm-6 -->
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Categoría</label>
                                <select data-placeholder="Choose One">
                                <option value="">Seleccione uno</option>
                                    <option >Harinas</option>
                                    <option >Limpieza</option>
                                    <option >Enlatados</option>
                                </select>
                            </div><!-- form-group -->

                            <div class="form-group">
                                <label class="control-label">Proveedor</label>
                                <select data-placeholder="Choose One">
                                <option value="">Seleccione uno</option>
                                    <option >Procesadora J&amp;J</option>
                                    <option >Vivieres el Vid</option>
                                    <option >Comercializadora 1</option>
                                </select>
                            </div><!-- form-group -->
                        </div><!-- col-sm-6 -->

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Fecha vencimiento</label>
                                <input type="text" class="form-control" />
                            </div><!-- form-group -->
                        </div><!-- col-sm-6 -->

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Lote</label>
                                <input type="text" class="form-control" />
                            </div><!-- form-group -->
                        </div><!-- col-sm-6 -->

                      <div class="panel-body col-sm-4">
                          <p>Imagen del producto</p>
                          <form action="files" class="dropzone">
                              <div class="fallback">
                                  <input name="file" type="file" />
                              </div>
                          </form>
                      </div><!-- panel-body -->


                      </div><!-- row -->
                  </div><!-- panel-body -->
                  <div class="panel-footer">
                      <button class="btn btn-primary">Guardar</button>
                  </div><!-- panel-footer -->
          </div>
      </div>
    </div>
</div>
<?php include(HTML_DIR.'overall/footer.html');?>
