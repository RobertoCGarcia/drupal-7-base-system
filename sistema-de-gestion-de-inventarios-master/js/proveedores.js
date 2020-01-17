		$(document).ready(function(){
			load(1);
		});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_proveedor.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					console.log("Load Proveedor");
				}
			})
		}

		
	function eliminar (id){

		var q= $("#q").val();
		if (confirm("Realmente deseas eliminar el proveedor")){	
		$.ajax({
        type: "GET",
        url: "./ajax/buscar_proveedor.php",
        data: "id="+id,"q":q,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		load(1);
		console.log("Eliminar Proveedor");
		}
			});
		}
    }
		

$( "#guardar_proveedor" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_proveedor.php",
			data: parametros,
			 beforeSend: function(objeto){
				 $("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			 success: function(datos){
			     $("#resultados_ajax").html(datos);
			     $('#guardar_datos').attr("disabled", false);
                 //Limpiar los datos actualizados
			     //document.getElementById("nombre").value = "";
			     //document.getElementById("descripcion").value = "";
			     console.log("Registrar Proveedor");
			     load(1);
		     }
	});
  event.preventDefault();
})

$("#editar_proveedor").submit(function( event ) {
$('#actualizar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_proveedor.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos').attr("disabled", false);
			//Limpiar los datos actualizados
	        //document.getElementById("mod_nombre").value = "";
	        //document.getElementById("mod_descripcion").value = "";			
			console.log("Edit Proveedor");
			load(1);
		  }
	});
  event.preventDefault();
})


function getDataRecord(id){

    console.log("getDataRecord");
    var id = $("#proveedor_id_"+id).val(); 
	var proveedor_nombre = $("#proveedor_nombre_"+id).val();
	var proveedor_nombrecontacto = $("#proveedor_datoscontacto_"+id).val();
	var proveedor_direccion = $("#proveedor_direccion_"+id).val();
	var proveedor_telefono = $("#proveedor_telefono_"+id).val();
	var proveedor_movil = $("#proveedor_movil_"+id).val();
	var proveedor_paginaweb = $("#proveedor_paginaweb_"+id).val();
	var proveedor_datos = $("#proveedor_datos_"+id).val();
	var proveedor_etiquetas = $("#proveedor_etiquetas_"+id).val();
	var date_added = $("#date_added_"+id).val();

    $("#mod_id").val(id);
    $("#mod_nombre").val(proveedor_nombre);
    $("#mod_nombrecontacto").val(proveedor_nombrecontacto);
	//mod_direccion
	$("#mod_direccion").val(proveedor_direccion);
    //mod_telefono
    $("#mod_telefono").val(proveedor_telefono);
    $("#mod_movil").val(proveedor_movil);
    //mod_paginaweb
    $("#mod_paginaweb").val(proveedor_paginaweb);
    //mod_etiquetas
    $("#mod_etiquetas").val(proveedor_etiquetas);
    //mod_adicionales
    $("#mod_adicionales").val(proveedor_datos);
		
}
