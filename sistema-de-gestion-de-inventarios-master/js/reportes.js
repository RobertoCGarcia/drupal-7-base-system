		$(document).ready(function(){
			load(1);
			
		});

		function load(page){
			var q= $("#reporte").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/reportes.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					$('[data-toggle="tooltip"]').tooltip({html:true}); 
					
				}
			})
		}



		function LoadReport(){
			var q= $("#reporte").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/reportes.php?action=showreport&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					$('[data-toggle="tooltip"]').tooltip({html:true}); 
					
				}
			})
		}
		
