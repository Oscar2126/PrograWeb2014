$(document).ready(
  function(){
       var flag=0;
		$('button').click(
		  function(){
			  if (flag==0) {
			 	 $('img').fadeTo( "slow", 0.3); flag=1;  
			  }
			  else{
			  	 $('img').fadeTo("slow",1); flag=0;
			  }
			  
		 }
		);
		
		
		
		
    }
);



//$('img').attr("src","3.jpg");