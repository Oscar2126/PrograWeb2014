//manejo de jquery con parte javascrip

$(document).ready(
  function(){
       
		$('img').click(
		    function(){
			   $(this).height('200');
			   }
		)
		$('#btn1').click(
		    function(){
			  $('img').height(300);
			
		        }
		)


		
		var myVar=setInterval(function(){myTimer()},1200);

			function myTimer(){
				$('#random').attr("src","img/"+parseInt((Math.random()*5)+1)+".jpg");
			}
    }
);
