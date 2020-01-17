<?php
	include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/

//Recorrer los datos que llegan del formulario para revisar el contenido 
     /*
     foreach ($_POST as $key => $value) {
	     print $key . " => " . $value ."<br>";
     }
     */
  

	if (empty($_POST['mod_id'])) {
           $errors[] = "ID vacío";
	   } else if (empty($_POST['mod_nombre'])) {
           $errors[] = "Nombre vacío";
       } else if (empty($_POST['mod_nombrecontacto'])){
			$errors[] = "Datos adicionales de la Empresa vacío";
       } else if ($_POST['mod_movil']==""){
			$errors[] = "Numero de movil vacío";
	   } else if ($_POST['mod_direccion']==""){
			$errors[] = "Dirección vacío";
	   } else if (empty($_POST['mod_telefono'])){
			$errors[] = "Teléfono vacío";
	   } else if (empty($_POST['mod_paginaweb'])){
			$errors[] = "Pagina Web vacío";
	   } else if (empty($_POST['mod_etiquetas'])){
			$errors[] = "Etiquetas de Clasificación vacío";					
	   } else if ( 
	   	    //$_POST['estado']!="" &&
			//$_POST['stock']!="" &&
			//!empty($_POST['precio'])
			!empty($_POST['mod_nombre']) &&
			!empty($_POST['mod_nombrecontacto']) &&
			!empty($_POST['mod_movil']) &&
            !empty($_POST['mod_direccion']) &&
            !empty($_POST['mod_telefono']) &&
            !empty($_POST['mod_paginaweb']) &&
            !empty($_POST['mod_etiquetas'])  
  		){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["mod_nombre"],ENT_QUOTES)));
		$nombrecontacto=mysqli_real_escape_string($con,(strip_tags($_POST["mod_nombrecontacto"],ENT_QUOTES)));
		$movil=mysqli_real_escape_string($con,(strip_tags($_POST["mod_movil"],ENT_QUOTES)));
		$direccion=mysqli_real_escape_string($con,(strip_tags($_POST["mod_direccion"],ENT_QUOTES)));
		$telefono=mysqli_real_escape_string($con,(strip_tags($_POST["mod_telefono"],ENT_QUOTES)));
		$paginaweb=mysqli_real_escape_string($con,(strip_tags($_POST["mod_paginaweb"],ENT_QUOTES)));
		$etiquetas=mysqli_real_escape_string($con,(strip_tags($_POST["mod_etiquetas"],ENT_QUOTES)));
		$adicionales=mysqli_real_escape_string($con,(strip_tags($_POST["mod_adicionales"],ENT_QUOTES)));
		
		$id_proveedor=intval($_POST['mod_id']);
		$sql="UPDATE proveedor SET 	proveedor_nombre='".$nombre."', proveedor_datoscontacto	='".$nombrecontacto."', proveedor_direccion='".$direccion."', proveedor_telefono='".$telefono."', proveedor_movil='".$movil."', proveedor_paginaweb='".$paginaweb."', proveedor_datos='".$adicionales."', proveedor_etiquetas='".$etiquetas."' WHERE id_proveedor='".$id_proveedor."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Proveedor ha sido actualizado satisfactoriamente.";
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