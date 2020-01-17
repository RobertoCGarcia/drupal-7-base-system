<?php

	/*-------------------------
	Autor: WEB OPERATIONS - Roberto Garcia
	Web: http://www.weboperations.mx
	Mail: rg@weboperations.mx
	---------------------------*/
	require_once "is_logged.php";//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/* Connect To Database*/
	require_once "../config/db.php";//Contiene las variables de configuracion para conectar a la base de datos
	require_once "../config/conexion.php";//Contiene funcion que conecta a la base de datos
	require_once "../funciones.php";

	//En este caso los datos de los productos de las facturas estan en la tabla tmp, y de ahi se pasan a la tabla
	//detalle_factura para registrar el movimiento
	$session_id= session_id();
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
    $id_cliente=intval($_REQUEST['id_cliente']);
    $id_vendedor=intval($_REQUEST['id_vendedor']);
    $condiciones=mysqli_real_escape_string($con,(strip_tags($_REQUEST['condiciones'], ENT_QUOTES)));	

	if($action == 'agregarFactura'){

              if($id_cliente == 0){
              ?>
			          <div class="alert alert-danger" role="alert">
				          <button type="button" class="close" data-dismiss="alert">&times;</button>
					          <strong>Error!</strong> Seleccionar un cliente de forma adecuada.
			          </div>
                  <?php
              	  exit(0);
              }

	          $sql_count=mysqli_query($con,"select * from tmp where session_id='".$session_id."'");
	          $count=mysqli_num_rows($sql_count);
	          if ($count==0){
	          ?>
			          <div class="alert alert-danger" role="alert">
				          <button type="button" class="close" data-dismiss="alert">&times;</button>
					          <strong>Error!</strong> No hay productos agregados a la factura.
			          </div>
	          <?php	
	               exit;
	          }              
         
              //print " action: " . $action . "<br/>";
              //print " id_cliente: " . $id_cliente . "<br/>";
              //print " id_vendedor: " . $id_vendedor . "<br/>";
              //print " condiciones: " . $condiciones . "<br/>";

              //Fin de variables por GET
              $sql=mysqli_query($con, "select LAST_INSERT_ID(numero_factura) as last from facturas order by id_factura desc limit 0,1 ");
              $rw=mysqli_fetch_array($sql);
              $numero_factura=$rw['last']+1;
    
              $nums=1;
              $sumador_total=0;
              $sql=mysqli_query($con, "select * from products, tmp where products.id_producto=tmp.id_producto and tmp.session_id='".$session_id."'");
         
              while ($row=mysqli_fetch_array($sql)){

	              $id_tmp=$row["id_tmp"];
	              $id_producto=$row["id_producto"];
	              $codigo_producto=$row['codigo_producto'];
	              $cantidad=$row['cantidad_tmp'];
	              $nombre_producto=$row['nombre_producto'];
	              $precio_venta=$row['precio_tmp'];
 	              $precio_venta_f=number_format($precio_venta,2);//Formateo variables
	              $precio_venta_r=str_replace(",","",$precio_venta_f);//Reemplazo las comas
	              $precio_total=$precio_venta_r*$cantidad;
	              $precio_total_f=number_format($precio_total,2);//Precio total formateado
	              $precio_total_r=str_replace(",","",$precio_total_f);//Reemplazo las comas
	              $sumador_total+=$precio_total_r;//Sumador
	              //Insert en la tabla detalle_cotizacion
	              $insert_detail=mysqli_query($con, "INSERT INTO detalle_factura VALUES (NULL,'$numero_factura','$id_producto','$cantidad','$precio_venta_r')");
	              $nums++;

                  //Restar del inventario lo necesario para cumplir con la factura y ver reflejado el cambio dentro
                  //del inventario
		          $quantity = intval($cantidad);
		          $reference = " Referencia: Factura No: " . $numero_factura . " ";
		          //$id_producto = intval($_GET['id']);
		          $user_id = $_SESSION['user_id'];
		          $firstname = $_SESSION['user_name'];
		          $nota = "$firstname eliminó $quantity producto(s) del inventario para surtir Factura No. " . $numero_factura;
		          $fecha = date("Y-m-d H:i:s");
		          guardar_historial($id_producto,$user_id,$fecha,$nota,$reference,$quantity);
		          $update=eliminar_stock($id_producto,$quantity);

	          }

              //Agregar el encabezado de la factura, salvar los datos de la factura
              $date=date("Y-m-d H:i:s");
              $insert=mysqli_query($con,"INSERT INTO facturas VALUES (NULL,'$numero_factura','$date','$id_cliente','$id_vendedor','$condiciones','$sumador_total','1')");
              //vaciar la tabla tmp, que almacena los datos de las facturas
              $delete=mysqli_query($con,"DELETE FROM tmp WHERE session_id='".$session_id."'");
              ?>
              <div class="alert alert-success alert-dismissible" role="alert">
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <strong>Aviso!</strong> Factura Registrada con éxito.
			  </div>
			<?php

	}    
