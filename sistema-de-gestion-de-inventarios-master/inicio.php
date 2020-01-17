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
    $active_acercade = "";
    $active_almacen = "";
    $active_perfil="";
    $active_stock ="";
    $active_categoria="";
	$title="Inicio | Sistema de Facturación";
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
INICIO
		</div>
			<div class="panel-body">







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