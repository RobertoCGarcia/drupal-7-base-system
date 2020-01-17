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
$active_notasVenta = "active";
$active_proveedor = "";
$active_acercade = "";
$active_almacen = "";
$active_perfil="";
$active_stock ="";
$active_categoria="";
$title="Nota de Venta | Sistema de Facturación";
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
		    <div class="btn-group pull-right">
				<a  href="nueva_notaVenta.php" class="btn btn-info"><span class="glyphicon glyphicon-plus" ></span> Nueva Nota de Venta</a>
			</div>
			<h4><i class='glyphicon glyphicon-search'></i> Buscar Nota de Venta</h4>
		</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label">Cliente o # de Nota</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre del cliente o # de Nota" onkeyup='load(1);'>
							</div>
							
							<div class="col-md-3">
								<button type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-search" ></span> Buscar</button>
								<span id="loader"></span>
							</div>
							
						</div>

			    </form>
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
			</div>
		</div>	
		
	</div>
	<hr>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/notaventa.js"></script>
  </body>
</html>