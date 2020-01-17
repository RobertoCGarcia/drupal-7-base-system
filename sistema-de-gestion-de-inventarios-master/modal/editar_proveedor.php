	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">

				<i class='glyphicon glyphicon-edit'></i> Editar Proveedor</h4>
		  </div>
		  <div class="modal-body">


			<form class="form-horizontal" method="post" id="editar_proveedor" name="editar_proveedor">

			<div id="resultados_ajax2"></div>
			  
			  <div class="form-group">
				
				<label for="mod_nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="mod_nombre" name="mod_nombre"  required>
					<input type="hidden" name="mod_id" id="mod_id">
				</div>
			  </div>
			  			 

			  <div class="form-group">
				  <label for="mod_nombrecontacto" class="col-sm-3 control-label">Nombre del Contacto</label>
				  <div class="col-sm-8">
				       <input type="text" class="form-control" id="mod_nombrecontacto" name="mod_nombrecontacto" required>
				  </div>
			  </div>		


	          <div class="form-group">
				 <label for="mod_movil" class="col-sm-3 control-label">Movil del Contacto</label>
				 <div class="col-sm-8">
				     <input type="text" class="form-control" id="mod_movil" name="mod_movil" required>
				 </div>
			  </div>


			  <div class="form-group">
				 <label for="mod_direccion" class="col-sm-3 control-label">Dirección</label>
				 <div class="col-sm-8">
				     <textarea class="form-control" id="mod_direccion" name="mod_direccion" maxlength="255" ></textarea>  
				 </div>
			  </div>

			   <div class="form-group">
				 <label for="mod_telefono" class="col-sm-3 control-label">Teléfono</label>
				 <div class="col-sm-8">
				     <input type="text" class="form-control" id="mod_telefono" name="mod_telefono" required>
				 </div>
			   </div>


			   <div class="form-group">
				 <label for="mod_paginaweb" class="col-sm-3 control-label">Pagina Web</label>
				 <div class="col-sm-8">
				     <input type="text" class="form-control" id="mod_paginaweb" name="mod_paginaweb" required>
				 </div>
			   </div>

			   <div class="form-group">
				 <label for="mod_etiquetas" class="col-sm-3 control-label">Etiquetas de Clasificación</label>
				 <div class="col-sm-8">
				     <input type="text" class="form-control" id="mod_etiquetas" name="mod_etiquetas" required>
				 </div>
			   </div>

			   <div class="form-group">
				 <label for="mod_adicionales" class="col-sm-3 control-label">Datos Adicionales</label>
				 <div class="col-sm-8">
					 <textarea class="form-control" id="mod_adicionales" name="mod_adicionales" maxlength="255" ></textarea>  
				 </div>
			   </div>


		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>