$(document).ready(
	function(){
		

		$( "#btnAjax" ).click(function() {

			$.ajax({
				   type: "POST",
				   
				   cache: false,
				   
				   url: "tabla.php",
				   
				   beforeSend: function( xhr ) {
						$('#loadAjax').html('beforeSend');
						$('#loadAjax').hide("slow");
				   },
				   
				   error: function( ){
						$('#loadAjax').html('error');
				   }, 
				   
				   data: "profundidad="+$("#profundidad").val()+"&sube="+$("#sube").val()+"&baja="+$("#baja").val()+"&dias="+$("#dias").val(),
				   
				   success: function(data){
				   	$('#loadAjax').show("slow");
						$('#loadAjax').html('success'+data);
					$("#profundidad").val("");
					$("#sube").val("");
					$("#baja").val("");
					$("#dias").val("");
				 }
			});// fin ajax
		
		});	// fin click #btnAjax

	}
);
	