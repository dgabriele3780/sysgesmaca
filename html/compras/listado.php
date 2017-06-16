<?php include(HTML_DIR.'overall/header.html'); ?>
<?php include(HTML_DIR.'overall/topnav.html'); ?>
<section>
    <div class="mainwrapper">
      <?php include(HTML_DIR.'overall/leftpanel.html'); ?>
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-truck"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                            <li>Compras</li>
                            <li>Historial</li>
                        </ul>
                        <h4>Listado de compras realizadas</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            <div class="contentpanel">
              <br>
              <table id="shTable" class="table table-striped table-bordered">
                   <thead class="">
                       <tr>
                          <th>Fecha</th>
                          <th>Proveedor</th>
                          <th>Estatus</th>
                          <th>Acciones</th>
                       </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>2011/04/25</td>
                         <td>Juan Arcia & Asociados</td>
                         <td>Exito</td>
                         <td>
                            <button class="btn btn-success btn-rounded btn-sm" title="Detalles"><i class="glyphicon glyphicon-search"></i></button>
                          </td>
                     </tr>
                     <tr>
                       <td>2011/04/25</td>
                         <td>Procesadora J&amp;J</td>
                         <td>Compra imcompleta</td>
                         <td>
                            <button class="btn btn-success btn-rounded btn-sm" title="Detalles"><i class="glyphicon glyphicon-search"></i></button>
                          </td>
                     </tr>

                   </tbody>
               </table>
            </div><!-- contentpanel -->
        </div><!-- mainpanel -->
    </div><!-- mainwrapper -->
</section>


<?php include(HTML_DIR.'overall/footer.html');?>
