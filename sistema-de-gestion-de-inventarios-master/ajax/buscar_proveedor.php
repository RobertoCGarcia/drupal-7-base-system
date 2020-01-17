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
	
    //Se recibe el parametro de la acción que se va a ejecutar en el servidor
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	

	if (isset($_GET['id'])){
		$id_proveedor=intval($_GET['id']);
		$query=mysqli_query($con, "select * from categorias where id_proveedor='".$id_proveedor."'");
		$count=mysqli_num_rows($query);
		if ($count==0){
			if ($delete1=mysqli_query($con,"DELETE FROM proveedor WHERE id_proveedor='".$id_proveedor."'")){
			?>
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Aviso!</strong> Datos eliminados exitosamente.
			</div>
			<?php 
		}else {
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> Lo siento algo ha salido mal intenta nuevamente.
			</div>
			<?php
			
		}
			
		} else {
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> No se pudo eliminar ésta  categoría. Existen productos vinculados a ésta categoría. 
			</div>
			<?php
		}
		
		
		
	}
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		 $aColumns = array('proveedor_nombre');//Columnas de busqueda
		 $sTable = "proveedor";
		 $sWhere = "";
		if ( $_GET['q'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		$sWhere.=" order by proveedor_nombre";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 10; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './clientesXXX.php';
		//main query to fetch the data
		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			
			?>
			<div class="table-responsive">
			  <table class="table">
				<tr  class="success">
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Etiquetas</th>
					<th>Agregado</th>
					<th class='text-right'>Acciones</th>
					
				</tr>
				<?php
				while ($row=mysqli_fetch_array($query)){

						$id_proveedor=$row['id_proveedor'];
						$proveedor_nombre=$row['proveedor_nombre'];
                        $proveedor_datoscontacto = $row['proveedor_datoscontacto'];
						$proveedor_direccion=$row['proveedor_direccion'];
						$proveedor_telefono=$row['proveedor_telefono'];
						$proveedor_movil=$row['proveedor_movil'];
						$proveedor_paginaweb=$row['proveedor_paginaweb'];
						$proveedor_datos=$row['proveedor_datos'];
						$proveedor_etiquetas=$row['proveedor_etiquetas'];
						$date_added= date('d/m/Y', strtotime($row['date_added']));
						
					?>

                    <input type="hidden" value="<?php echo $id_proveedor;?>" id="proveedor_id_<?php echo $id_proveedor;?>">
					<input type="hidden" value="<?php echo $proveedor_nombre;?>" id="proveedor_nombre_<?php echo $id_proveedor;?>">
					<input type="hidden" value="<?php echo $proveedor_datoscontacto;?>" id="proveedor_datoscontacto_<?php echo $id_proveedor;?>">
					<input type="hidden" value="<?php echo $proveedor_direccion;?>" id="proveedor_direccion_<?php echo $id_proveedor;?>">
					<input type="hidden" value="<?php echo $proveedor_telefono;?>" id="proveedor_telefono_<?php echo $id_proveedor;?>">
					<input type="hidden" value="<?php echo $proveedor_movil;?>" id="proveedor_movil_<?php echo $id_proveedor;?>">
					<input type="hidden" value="<?php echo $proveedor_paginaweb;?>" id="proveedor_paginaweb_<?php echo $id_proveedor;?>">
					<input type="hidden" value="<?php echo $proveedor_datos;?>" id="proveedor_datos_<?php echo $id_proveedor;?>">
					<input type="hidden" value="<?php echo $proveedor_etiquetas;?>" id="proveedor_etiquetas_<?php echo $id_proveedor;?>">
					<input type="hidden" value="<?php echo $date_added;?>" id="date_added_<?php echo $id_proveedor;?>">

					<tr>
						<td><?php echo $proveedor_nombre; ?></td>
						<td ><?php echo $proveedor_direccion; ?></td>
						<td ><?php echo $proveedor_telefono; ?></td>
						<td ><?php echo $proveedor_etiquetas; ?></td>
						<td><?php echo $date_added;?></td>
					<td class='text-right'>
						<a href="#" class='btn btn-default' title='Editar Proveedor' onclick="getDataRecord('<?php echo $id_proveedor;?>');" data-toggle="modal" data-target="#myModal2"><i class="glyphicon glyphicon-edit"></i></a>
						<a href="#" class='btn btn-default' title='Borrar Proveedor' onclick="eliminar('<?php echo $id_proveedor; ?>')"><i class="glyphicon glyphicon-trash"></i> </a>
					</td>
						
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan=6><span class="pull-right">
					<?php
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
?>