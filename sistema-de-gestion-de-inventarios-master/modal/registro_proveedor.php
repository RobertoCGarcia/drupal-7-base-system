	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevoCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'>
			</i> Agregar nuevo Proveedor</h4>
		  </div>
		  <div class="modal-body">

			<form class="form-horizontal" method="post" id="guardar_proveedor" name="guardar_proveedor">
			
			  <div id="resultados_ajax"></div>
			  
			       <div class="form-group">
				     <label for="nombre" class="col-sm-3 control-label">Nombre</label>
				     <div class="col-sm-8">
				       <input type="text" class="form-control" id="nombre" name="nombre" required>
				     </div>
			       </div>
			 
			       <div class="form-group">
				     <label for="nombrecontacto" class="col-sm-3 control-label">Nombre del Contacto</label>
				     <div class="col-sm-8">
				       <input type="text" class="form-control" id="nombrecontacto" name="nombrecontacto" required>
				     </div>
			       </div>			 


			       <div class="form-group">
				     <label for="movil" class="col-sm-3 control-label">Movil del Contacto</label>
				     <div class="col-sm-8">
				       <input type="text" class="form-control" id="movil" name="movil" required>
				     </div>
			       </div>

			       <div class="form-group">
				     <label for="direccion" class="col-sm-3 control-label">Dirección</label>
				     <div class="col-sm-8">
					     <textarea class="form-control" id="direccion" name="direccion"   maxlength="255" ></textarea>  
				     </div>
			       </div>

			       <div class="form-group">
				     <label for="telefono" class="col-sm-3 control-label">Teléfono</label>
				     <div class="col-sm-8">
				       <input type="text" class="form-control" id="telefono" name="telefono" required>
				     </div>
			       </div>


			       <div class="form-group">
				     <label for="paginaweb" class="col-sm-3 control-label">Pagina Web</label>
				     <div class="col-sm-8">
				       <input type="text" class="form-control" id="paginaweb" name="paginaweb" required>
				     </div>
			       </div>

			       <div class="form-group">
				     <label for="etiquetas" class="col-sm-3 control-label">Etiquetas de Clasificación</label>
				     <div class="col-sm-8">
				       <input type="text" class="form-control" id="etiquetas" name="etiquetas" required>
				     </div>
			       </div>

			       <div class="form-group">
				     <label for="adicionales" class="col-sm-3 control-label">Datos Adicionales</label>
				     <div class="col-sm-8">
					     <textarea class="form-control" id="adicionales" name="adicionales"   maxlength="255" ></textarea>  
				     </div>
			       </div>
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>