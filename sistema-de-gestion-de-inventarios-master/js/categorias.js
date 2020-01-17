$(document).ready(function(){
			load(1);
		});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_categorias.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					console.log("Load Categoria");
				}
			})
}


function eliminar (id){

		var q= $("#q").val();
		if (confirm("Realmente deseas eliminar la categoría")){	
		$.ajax({
        type: "GET",
        url: "./ajax/buscar_categorias.php",
        data: "id="+id,"q":q,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		load(1);
		console.log("Eliminar Categoria");
		}
			});
		}
}
		
		
	
$( "#guardar_categoria" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nueva_categoria.php",
			data: parametros,
			 beforeSend: function(objeto){
				 $("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			 success: function(datos){
			     $("#resultados_ajax").html(datos);
			     $('#guardar_datos').attr("disabled", false);
                 //Limpiar los datos actualizados
			     document.getElementById("nombre").value = "";
			     document.getElementById("descripcion").value = "";
			     console.log("Update Categoria");
			     load(1);
		     }
	});
  event.preventDefault();
})


$( "#editar_categoria" ).submit(function( event ) {
  $('#actualizar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_categoria.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos').attr("disabled", false);
			//Limpiar los datos actualizados
	        document.getElementById("mod_nombre").value = "";
	        document.getElementById("mod_descripcion").value = "";
			console.log("Edit Categoria");

			load(1);
		  }
	});
  event.preventDefault();
})


$('#myModal2').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var nombre = button.data('nombre') 
	  var descripcion = button.data('descripcion')
	  var id = button.data('id')
      var idproveedor = button.data('idproveedor')
      var proveedor = button.data('proveedor')
	  var modal = $(this)
	  modal.find('.modal-body #mod_nombre').val(nombre)
	  modal.find('.modal-body #mod_descripcion').val(descripcion) 
	  modal.find('.modal-body #mod_id').val(id)
	  modal.find('.modal-body #mod_proveedor').val(proveedor)
	  modal.find('.modal-body #mod_idproveedor').val(idproveedor)
})
		

