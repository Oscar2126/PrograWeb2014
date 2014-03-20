  var avanza1
  var cont=0;
  var postop=0;
  
 /*Object {top: -3.90625, left: 318}
$('#gary').position();
Object {top: -198.671875, left: 318}
*/
 
 $(document).ready(

  function(){
   
		$('#boton').click(
		  function(){
			 	 		 	 dia=setInterval(function(){Dia()}, 1000);
					 }
		);
		      			
			function Dia(){
			    	cont++;
			    	
			    	if(cont<5){//dia
			    		$('img').animate({"top": "-="+((400/$('input#altura').val())*($('input#avanza').val()))}, 5000);
                       cont=5;
                       if($('#gary').position().top<=0){
			    			
			    			window.clearInterval(dia);
			    			//alert("hola");
			    		}

			    				    			
			    	}
			    	else{
			    	
			    	
			    		if(cont>=5 && cont<10){//noche
			    	   		 $('img').animate({"top": "+="+(400/$('input#altura').val())}, 5000);
                       		 cont=10;
                       		

			    		}
			    		
			    		if(cont>=10){
			    	 			cont=0;
			    	     	  			    	
			    		}
			    		
			    		if($('#gary').position().top<=0){
			    			
			    			window.clearInterval(dia);
			    			//alert("hola "+$('#gary').position().top);
			    		}

			    		
			    					    				    	
			    	}
		

			    	
			}
		    }
);


