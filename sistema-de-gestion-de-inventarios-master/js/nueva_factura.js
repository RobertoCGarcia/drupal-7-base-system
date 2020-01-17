
$(document).ready(function(){
	load(1);
});

function load(page){
	var q= $("#q").val();
	$("#loader").fadeIn('slow');
	$.ajax({
		url:'./ajax/productos_factura.php?action=ajax&page='+page+'&q='+q,
		 beforeSend: function(objeto){
		 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
	  },
		success:function(data){
			$(".outer_div").html(data).fadeIn('slow');
			$('#loader').html('');
			
		}
	})
}


function agregar (id){

			console.log("AGREGAR DATOS FACTURA");
			var precio_venta=document.getElementById('precio_venta_'+id).value;
			var cantidad=document.getElementById('cantidad_'+id).value;
			//Inicia validacion
			if (isNaN(cantidad))
			{
			alert('Esto no es un numero');
			document.getElementById('cantidad_'+id).focus();
			return false;
			}
			if (isNaN(precio_venta))
			{
			alert('Esto no es un numero');
			document.getElementById('precio_venta_'+id).focus();
			return false;
			}
			//Fin validacion
			
			$.ajax({
                     type: "POST",
                     url: "./ajax/agregar_facturacion.php",
                     data: "id="+id+"&precio_venta="+precio_venta+"&cantidad="+cantidad,
		             beforeSend: function(objeto){
			            $("#resultados").html("Mensaje: Cargando...");
		             },
                     success: function(datos){
		                $("#resultados").html(datos);
		             }
			});
}


		
function eliminar (id){
			
			$.ajax({
        type: "GET",
        url: "./ajax/agregar_facturacion.php",
        data: "id="+id,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		}
			});

		
}
		

//Para mostrar la factura registrada dentro del sistema
$("#datos_factura").submit(function(){
		  var id_cliente = $("#id_cliente").val();
		  var id_vendedor = $("#id_vendedor").val();
		  var condiciones = $("#condiciones").val();
		  //console.log("DATOS FACTURA");

		  if (id_cliente==""){
			  alert("Debes seleccionar un cliente");
			  $("#nombre_cliente").focus();
			  return false;
		  }

		 VentanaCentrada('./pdf/documentos/factura_pdf.php?id_cliente='+id_cliente+'&id_vendedor='+id_vendedor+'&condiciones='+condiciones,'Factura','','1024','768','true');
         //console.log("agregar Factura al Sistema");
});
		

$("#guardar_cliente").submit(function( event ) {
		  $('#guardar_datos').attr("disabled", true);
		  
		 var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "ajax/nuevo_cliente.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#resultados_ajax").html(datos);
					$('#guardar_datos').attr("disabled", false);
					load(1);
				  }
			});
		  event.preventDefault();
		})
		

$( "#guardar_producto" ).submit(function( event ) {
		 
		 $('#guardar_datos').attr("disabled", true);
		  
		 var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "ajax/nuevo_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados_ajax_productos").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#resultados_ajax_productos").html(datos);
					$('#guardar_datos').attr("disabled", false);
					load(1);
				  }
			});
		  event.preventDefault();
})


//Esta función ayuda a registrar la factura dentro del sistema
//Una vez que la factura ya esta revisada y no existe problema alguno
//dentro de la misma.
$("#salvarFactura").click(function(){
    console.log("Salvar Factura Factura al Sistema");
    
     var id_cliente = $("#id_cliente").val();
     var id_vendedor = $("#id_vendedor").val();
     var condiciones = $("#condiciones").val();
     var action = "agregarFactura";


     if (id_cliente==""){
		  alert("Debes seleccionar un cliente");
		  $("#nombre_cliente").focus();
		  return false;
	 }

	 $.ajax({
			type: "POST",
			url: "ajax/guardar_datos_factura.php",
			data:  "action="+action+"&id_cliente="+id_cliente+"&id_vendedor="+id_vendedor+"&condiciones="+condiciones,
			 beforeSend: function(objeto){
				 $("#resultados").html("Mensaje: Cargando...");
			  },
			 success: function(datos){
			     $("#resultados").html(datos);
			     //$('#guardar_datos').attr("disabled", false);
                 //Limpiar los datos actualizados
			     //document.getElementById("nombre").value = "";
			     //document.getElementById("descripcion").value = "";
			     //console.log("Factura Registrada con éxito.");
			     //Para refrescar la pagina con los datos almacenados de la factura guardada
			     $("#datos_factura").submit();
		     }
	});    


});



