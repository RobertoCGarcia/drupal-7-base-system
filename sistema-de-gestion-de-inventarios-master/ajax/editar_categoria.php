<?php
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
   
    //Para mostrar los datos que llegan desde el cliente via internet, via ajax
    
    foreach ($_POST as $key => $value) {
    	print  $key . " -> " . $value. "<br/>";
    }
    

    //Descripcion de Datos:
    //mod_nombre = Nombre de la categoria
    //mod_id = Id de la Categoria Actual
    //mod_descripcion = Descripción de la categoria
    //mod_idproveedor = ID del proveedor actual que esta relacionado a la categoria
    //proveedor = ID del nuevo proveedor al cual esta asociada la categoria

	if (empty($_POST['mod_id'])) {
           $errors[] = "ID vacío";
        }else if (empty($_POST['mod_nombre'])) {
           $errors[] = "Nombre vacío";
        }  else if (
			!empty($_POST['mod_id']) &&
			!empty($_POST['mod_nombre'])
		){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id_proveedor = 0;
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["mod_nombre"],ENT_QUOTES)));
		$descripcion=mysqli_real_escape_string($con,(strip_tags($_POST["mod_descripcion"],ENT_QUOTES)));
		
		//ID de la categoria
		$id_categoria=intval($_POST['mod_id']);
		//ID del proveedor actual que tiene asignado la categoria
		$mod_idproveedor=intval($_POST['mod_idproveedor']);

		//ID del Proveedor nuevo, en caso de existir
		$proveedor=intval($_POST['proveedor']);
         
        //Si los dos proveedores son los mismos regresa el id del proveedor original
        //En caso contrario regresa el ID del nuevo proveedor seleccionado
        $id_proveedor= (($proveedor == 0))?$mod_idproveedor:$proveedor;
		$sql="UPDATE categorias SET nombre_categoria='".$nombre."', descripcion_categoria='".$descripcion."', id_proveedor='".$id_proveedor."' WHERE id_categoria='".$id_categoria."'";
		print "SQL result: " . $sql;
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Categoría ha sido actualizada satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>