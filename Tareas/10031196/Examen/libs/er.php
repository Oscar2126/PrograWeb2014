<?php



class er {

	function email ($mail){
		if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$mail)) {
   			 return true;
		}else{
			return false;
			}
	}	
	
	function username ($username){
		if (preg_match('/^[a-z\d_]{4,28}$/i', $username)) {
        	return true;
		}else{
			return false;
		}
	}
	
	function cp ($cp){
	if (preg_match('/^[0-9]{5,5}$/', $cp)) {
  		return true;
    }else{
    	return false;
    }
	
	}
	
	function pass ($pass){
		
		 if(strlen($pass) < 6){
	       return false;
	     }
	     
	     if (!preg_match('`[a-z]`',$pass)){

	      return false;
	     }
	     if (!preg_match('`[A-Z]`',$pass)){

	      return false;
	     }
	     if (!preg_match('`[0-9]`',$pass)){
	     	      return false;
	     }
	     if (preg_match('/^[a-z\d_]{4,28}$/i', $pass)) {
        	return true;
		 }
	   
	
	}
}
?>