	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevoCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nueva categoría</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_categoria" name="guardar_categoria">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nombre" name="nombre" required>
				</div>
			  </div>
			 
				  
			  <div class="form-group">
				<label for="descripcion" class="col-sm-3 control-label">Descripción</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="descripcion" name="descripcion"   maxlength="255" ></textarea>
				  
				</div>
			  </div>
			  
	 
	 		  <div class="form-group">
				<label for="proveedor" class="col-sm-3 control-label">Proveedor</label>
				<div class="col-sm-8">
					<select class='form-control' name='proveedor' id='proveedor' required>
						<option value="">Selecciona un Proveedor</option>
							<?php 
							$query_proveedor=mysqli_query($con,"select * from proveedor order by proveedor_nombre");
							while($rw=mysqli_fetch_array($query_proveedor))	{
								?>
							<option value="<?php echo $rw['id_proveedor'];?>"><?php echo $rw['proveedor_nombre'];?></option>			
								<?php
							}
							?>
					</select>			  
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