<?php
	/*-------------------------
	Autor: WEB OPERATIONS - Roberto Garcia
	Web: http://www.weboperations.mx
	Mail: rg@weboperations.mx
	---------------------------*/
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	$active_reportes = "";
	$active_proveedor = "";
	$active_facturas="";
	$active_productos = "";
	$active_clientes = "";
	$active_usuarios = "";
    $active_notasVenta = "";
    $active_proveedor = "";
    $active_almacen = "";
	$active_perfil="";
    $active_acercade = "active";
    $active_stock ="";
    $active_categoria="";
	$title="Facturas | Sistema de Facturación";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include("head.php");?>

  </head>
  <body>
	<?php
	include("navbar.php");
	?>  
    <div class="container">
		<div class="panel panel-info">
		<div class="panel-heading">
			<h4><i class='glyphicon glyphicon-search'></i> Acerca del Proyecto</h4>
		</div>
			<div class="panel-body">

                <h1 class="padded-multiline">
                  <img src="http://portal.blackexperiment.com/sites/default/files/logo-v1a.png" alt="" align="center">
                  <br/>
                  <span>| Web Operations Technologies | </span>
                </h1>   

				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
			</div>
		</div>	
		
	</div>
	<hr>
	<?php
	include("footer.php");
	?>
  </body>
</html>