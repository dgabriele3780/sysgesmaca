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
                            <li>Facturas</li>
                            <li>Historial</li>
                        </ul>
                        <h4>Facturas realizadas</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            <div class="contentpanel">
              <br>
              <table id="shTable" class="table table-striped table-bordered">
                   <thead class="">
                       <tr>
                          <th>Fecha</th>
                          <th>Cliente</th>
                          <th>Estatus</th>
                          <th>Acciones</th>
                       </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>2017/02/25</td>
                         <td>Juan Olivares</td>
                         <td>Exito</td>
                         <td>
                            <button class="btn btn-success btn-rounded btn-sm" title="Detalles"><i class="glyphicon glyphicon-search"></i></button>
                            <button class="btn btn-warning btn-rounded btn-sm" title="Editar"><i class="glyphicon glyphicon-pencil"></i></button>
                            <button class="btn btn-danger btn-rounded btn-sm" title="Borrar"><i class="glyphicon glyphicon-trash"></i></button>
                          </td>
                     </tr>
                     <tr>
                       <td>2017/02/20</td>
                         <td>Bodega La Dona</td>
                         <td></td>
                         <td>
                            <button class="btn btn-success btn-rounded btn-sm" title="Detalles"><i class="glyphicon glyphicon-search"></i></button>
                            <button class="btn btn-warning btn-rounded btn-sm" title="Editar"><i class="glyphicon glyphicon-pencil"></i></button>
                            <button class="btn btn-danger btn-rounded btn-sm" title="Borrar"><i class="glyphicon glyphicon-trash"></i></button>                            
                          </td>
                     </tr>

                   </tbody>
               </table>
            </div><!-- contentpanel -->
        </div><!-- mainpanel -->
    </div><!-- mainwrapper -->
</section>


<?php include(HTML_DIR.'overall/footer.html');?>
