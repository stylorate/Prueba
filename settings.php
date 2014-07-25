<?php 
    session_start();
	include("header.php");
    require_once('check_notification.php');
?>
        <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <?php 
						include("side-menu.php");
					?>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
        </div>
    </nav>
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Administraci&oacute;n de Perfil</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <?php 
                        include("melodies-menu.php");
                    ?>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div> </div>
                <!-- /.sidebar-collapse -->
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="js/plugins/morris/morris.js"></script>
<script src="js/sb-admin.js"></script>
<script src="js/demo/dashboard-demo.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
