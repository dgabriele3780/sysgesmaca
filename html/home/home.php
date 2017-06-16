<?php include(HTML_DIR.'overall/header.html'); ?>
<?php include(HTML_DIR.'overall/topnav.html'); ?>
<section>
    <div class="mainwrapper">
<!-- menu lateral-->
<?php include(HTML_DIR.'overall/leftpanel.html'); ?>
<!-- /menu lateral -->
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                            <li>Inicio</li>
                        </ul>
                        <h4>Inicio</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
<!-- CONTENIDO  -->
            <div class="contentpanel">
                <div class="row row-stat">
                  <div class="row">
                      <div class="col-md-8">
                          <div class="panel panel-default">
                            <div class="panel-body">
                              <div class="row">
                                <div class="col-md-12">
                                  <h5 class="lg-title">Compras vs Ventas del año</h5>
                                  <p class="mb15">Volumen de compray y ventas de los clientes</p>
                                  <div id="bar-chart"></div>
                                </div><!-- col-md-7 -->

                              </div><!-- row -->
                            </div><!-- panel-body -->
                          </div><!-- panel -->
                      </div>
<!-- widgets -->
                      <div class="col-md-4">
                          <div class="panel panel-success-alt noborder">
                              <div class="panel-heading noborder">
                                  <div class="panel-btns">
                                      <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                  </div><!-- panel-btns -->
                                  <div class="panel-icon"><i class="fa fa-dollar"></i></div>
                                  <div class="media-body">
                                      <h5 class="md-title nomargin">Ventas realizadas</h5>
                                      <h1 class="mt5">128.256.000</h1>
                                  </div><!-- media-body -->
                              </div><!-- panel-body -->
                          </div><!-- panel -->
                      </div><!-- col-md-4 -->

                      <div class="col-md-4">
                          <div class="panel panel-primary noborder">
                              <div class="panel-heading noborder">
                                  <div class="panel-btns">
                                      <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                  </div><!-- panel-btns -->
                                  <div class="panel-icon"><i class="fa fa-users"></i></div>
                                  <div class="media-body">
                                      <h5 class="md-title nomargin">Nuevos Clientes</h5>
                                      <h1 class="mt5">138,102</h1>
                                  </div><!-- media-body -->
                              </div><!-- panel-body -->
                          </div><!-- panel -->
                      </div><!-- col-md-4 -->

                      <div class="col-md-4">
                          <div class="panel panel-dark noborder">
                              <div class="panel-heading noborder">
                                  <div class="panel-btns">
                                      <a href="" class="panel-close tooltips" data-toggle="tooltip" data-placement="left" title="Close Panel"><i class="fa fa-times"></i></a>
                                  </div><!-- panel-btns -->
                                  <div class="panel-icon"><i class="fa fa-pencil"></i></div>
                                  <div class="media-body">
                                      <h5 class="md-title nomargin">Productos en Stock</h5>
                                      <h1 class="mt5">153,900</h1>
                                  </div><!-- media-body -->
                              </div><!-- panel-body -->
                          </div><!-- panel -->
                      </div><!-- col-md-4 -->

                  </div><!-- row -->

                </div><!-- row -->



                <div class="row hidden">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body padding15">
                                <h5 class="md-title mt0 mb10">Estadisticas del sitio</h5>
                                <div id="basicFlotLegend" class="flotLegend"></div>
                                <div id="basicflot" class="flotChart"></div>
                            </div><!-- panel-body -->

                        </div><!-- panel -->
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body padding15">
                                <h5 class="md-title mt0 mb10">Site Visitors</h5>
                                <div id="basicFlotLegend2" class="flotLegend"></div>
                                <div id="basicflot2" class="flotChart"></div>
                            </div><!-- panel-body -->
                        </div><!-- panel -->
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body padding15">
                                <h5 class="md-title mt0 mb10">Site Impressions</h5>
                                <div id="basicFlotLegend3" class="flotLegend"></div>
                                <div id="basicflot3" class="flotChart"></div>
                            </div><!-- panel-body -->
                        </div><!-- panel -->
                    </div>
                </div><!-- row -->

            </div><!-- contentpanel -->
        </div><!-- mainpanel -->
    </div><!-- mainwrapper -->
</section>
<?php include(HTML_DIR.'overall/footer.html');?>
