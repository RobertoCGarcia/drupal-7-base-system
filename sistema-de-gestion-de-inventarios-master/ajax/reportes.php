<?php

	/*-------------------------
	Autor: WEB OPERATIONS - Roberto Garcia
	Web: http://www.weboperations.mx
	Mail: rg@weboperations.mx
	---------------------------*/
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/* Connect To Database*/
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if (isset($_GET['id'])){
		$numero_factura=intval($_GET['id']);
		$del1="delete from facturas where numero_factura='".$numero_factura."'";
		$del2="delete from detalle_factura where numero_factura='".$numero_factura."'";
		if ($delete1=mysqli_query($con,$del1) and $delete2=mysqli_query($con,$del2)){
			?>
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Aviso!</strong> Datos eliminados exitosamente
			</div>
			<?php 
		}else {
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> No se puedo eliminar los datos
			</div>
			<?php
			
		}
	}

	//Cuando se carga la pagina de los reportes
	if($action == 'ajax'){

		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));

         //Query para los resultados
         //Total de Articulos
         $sqlInventario = "SELECT COUNT(*) as TOTALPRODUCTOS FROM products WHERE `status_producto` = 1";
         $queryInventario = mysqli_query($con, $sqlInventario);
         $rowInventario= mysqli_fetch_array($queryInventario);
         //print " Total Productos: " . $rowInventario["TOTALPRODUCTOS"] . "<br/>"; 

         //Total de Categorias
         $sqlCategorias = "SELECT COUNT(*) as TOTALCATEGORIAS FROM categorias";
         $queryCategorias = mysqli_query($con, $sqlCategorias);
         $rowCategorias= mysqli_fetch_array($queryCategorias);

         //Total de Proveedores
         $sqlProveedores = "SELECT COUNT(*) as TOTALPROVEEDORES FROM proveedor WHERE proveedor_status LIKE '1'";
         $queryProveedores = mysqli_query($con, $sqlProveedores);
         $rowProveedores= mysqli_fetch_array($queryProveedores);
         //print " Total Proveedores: " . $rowProveedores["TOTALPROVEEDORES"] . "<br/>"; 

         //Total de Usuarios
         $sqlUsuarios = "SELECT COUNT(*) as TOTALUSUARIOS FROM users";
         $queryUsuarios = mysqli_query($con, $sqlUsuarios);
         $rowUsuarios= mysqli_fetch_array($queryUsuarios);
         //print " Total Vendedores: " . $rowUsuarios["TOTALUSUARIOS"] . "<br/>";          

         //Total de Facturas
         $sqlFacturasPagadas = "SELECT COUNT(*) as TOTALFACTURASPAGADAS FROM facturas WHERE `estado_factura` = 1";
         $queryFacturasPagadas = mysqli_query($con, $sqlFacturasPagadas);
         $rowFacturasPagadas= mysqli_fetch_array($queryFacturasPagadas);
         //print " Total Facturas Pagadas: " . $rowFacturasPagadas["TOTALFACTURASPAGADAS"] . "<br/>"; 


         $sqlFacturasPendientes = "SELECT COUNT(*) as TOTALFACTURASPENDIENTES FROM facturas WHERE `estado_factura` = 2";
         $queryFacturasPendientes = mysqli_query($con, $sqlFacturasPendientes);
         $rowFacturasPendientes= mysqli_fetch_array($queryFacturasPendientes);
         //print " Total Facturas Pendientes: " . $rowFacturasPendientes["TOTALFACTURASPENDIENTES"] . "<br/>";


         //Total de Clientes
         $sqlClientes = "SELECT COUNT(*) as TOTALCLIENTES FROM clientes WHERE `status_cliente` = 1";
         $queryCliente = mysqli_query($con, $sqlClientes);
         $rowCliente = mysqli_fetch_array($queryCliente);
         //print " Total Clientes: " . $rowCliente["TOTALCLIENTES"] . "<br/>";

         ?>

         <table class="table" align="center">
           <thead class="thead-dark">
             <tr>
               <th scope="col">#</th>
               <th scope="col">Dato Sistema</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <th scope="row">1</th>
               <td>Total de Productos</td>
               <td><?php print $rowInventario["TOTALPRODUCTOS"]; ?></td>
             </tr>

             <tr>
               <th scope="row">2</th>
               <td>Total de Categorías</td>
               <td><?php print $rowCategorias["TOTALCATEGORIAS"]; ?></td>
             </tr>             
             <tr>
               <th scope="row">3</th>
               <td>Total de Proveedores</td>
               <td><?php print $rowProveedores["TOTALPROVEEDORES"]; ?></td>
             </tr>
             <tr>
               <th scope="row">4</th>
               <td>Total de Vendedores</td>
               <td><?php print $rowUsuarios["TOTALUSUARIOS"]; ?></td>
             </tr>
             <tr>
               <th scope="row">5</th>
               <td>Total de Facturas Pagadas</td>
               <td><?php print $rowFacturasPagadas["TOTALFACTURASPAGADAS"]; ?></td>
             </tr>
             <tr>
               <th scope="row">6</th>
               <td>Total de Facturas Pendientes</td>
               <td><?php print $rowFacturasPendientes["TOTALFACTURASPENDIENTES"]; ?></td>
             </tr>
             <tr>
               <th scope="row">7</th>
               <td>Total de Clientes</td>
               <td><?php print $rowCliente["TOTALCLIENTES"]; ?></td>
             </tr>
             <tr>
               <th scope="row">8</th>
               <td>Total de Notas de Venta</td>
               <td><?php print "0"; ?></td>
             </tr>
           </tbody>
         </table>

         <?php

    }


    if($action == 'showreport'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));

        switch ($q) {
    	    case 'inventario-actual':
    		    # code...
    	        print "inventario-actual";

                require_once("reporte-inventario-actual.php");


    		    break;
    	
    	    case 'proveedor-categoria-producto-existencia':
    		    # code...
    	        print "proveedor-categoria-producto-existencia";    	
    		    break;

    	    case 'precio-del-producto':
    		    # code...
    	        print "precio-del-producto";    	
    		    break;

    	    case 'reporte-de-proveedores':
    		    # code...
    	        print "reporte-de-proveedores";    	
    		    break;

    	    case 'reporte-de-proveedor-categoria':
    		    # code...
    	        print "reporte-de-proveedor-categoria";    	
    		    break;

    	    default:
    		    # code...
    	  	    break;
        }
    }

?>

              <hr>
			</div>


	
