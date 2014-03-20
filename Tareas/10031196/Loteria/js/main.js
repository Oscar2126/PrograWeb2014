$(document).ready(
  function(){
       var flag=0;
		$('img').click(
		  function(){
			  if (flag==0) {
			 	 $(this).fadeTo( "slow", 0.3); flag=1;  
			  }
			  else{
			  	 $(this).fadeTo("slow",1); flag=0;
			  }
			  
		 }
		);
		
		$('img').attr("src","images/"+parseInt((Math.random())*30)+".jpg");


		
		
    }
);



//$('img').attr("src","3.jpg");