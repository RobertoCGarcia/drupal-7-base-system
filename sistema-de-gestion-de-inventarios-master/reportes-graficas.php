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
	
	$active_reportes = "active";
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
	$title="Reportes & Graficas | Sistema de Facturación";
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
Reportes & Graficas
		</div>
			<div class="panel-body">
                 
			    <form class="form-horizontal" role="form" id="datos_reporte_graficas">
				
				<div class="form-group row">


				    <label for="reporte" class="col-md-2 control-label">Reporte</label>
				        <div class="col-md-5">
					    <select class='form-control' name='reporte' id="reporte">
						    <option value="">Selecciona un Reporte</option>
							    <option value="inventario-actual">Inventario Actual</option>
							    <option value="proveedor-categoria-producto-existencia">Proveedor - Categoria - Producto - Existencia</option>
							    <option value="precio-del-producto">Precio del Producto</option>
							    <option value="reporte-de-proveedores">Reporte de Proveedores</option>
							    <option value="reporte-de-proveedor-categoria">Reporte de Proveedor-Categoria</option>
					    </select>
                        </div>
						


					    <div class="col-md-3">
								        <button type="button" class="btn btn-default" onclick='LoadReport();'>
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
	<script type="text/javascript" src="js/reportes.js"></script>
  </body>
</html>