//manejo de jquery con parte javascrip

$(document).ready(
  function(){

	$('#btn1').click(function(){

		var prof ;
		var sub;
		var baj;
		cont=0;
		sub=parseInt(document.getElementById('subir').value);
		baj=parseInt(document.getElementById('bajar').value);
		var prof=parseInt(document.getElementById('prof').value);
		var limite=400/prof;

		var myVar=setInterval(function(){myTimer()},1000);
		cont+=1;

		var dia=true;

		function myTimer(){

		

		if(cont<=3)
		{
		  $("img").animate({

		    "top":"-="+sub*limite

		  },"slow");	
		}
		else
		{
		  $("img").animate({

		    "top":"+="+baj*limite

		  },"slow");
		  if(cont==6){cont=0;}
		}
		  	

		}


	});	

    }
);
