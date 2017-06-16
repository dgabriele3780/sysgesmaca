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
<?php
if ($list_users ==false){
  echo 'Ha ocurrido un error en la consulta de usuarios';
}else{
  echo $list_users;
}
?>
</div>

            </div><!-- contentpanel -->
        </div><!-- mainpanel -->
    </div><!-- mainwrapper -->
</section>
<?php include(HTML_DIR.'overall/footer.html');?>
