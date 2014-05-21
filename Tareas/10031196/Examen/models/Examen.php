<?php

class Examen extends Modelo{
	public $nombre_tabla = 'usuario';
    public $pk = 'id_usuario';
    public $er;
    
public $atributos = array(
		'username'=>array(),
		'email'=>array(),
		'password'=>array(),
		'rfc'=>array(),
		'cp'=>array(),
  );

public $errores = array( );

private $username;
private $email;
private $password;
private $rfc;
private $cp;

function Examen (){
	parent :: Modelo();
	
}

public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }

public function get_username(){
        return $this->username;
    } 
public function set_username($valor){
     $er = new er ();
 
 	if($er->username($valor)==true){
 		
 		$rs = $this->consulta_sql("select * from usuario where username = '$valor'");
        $rows = $rs->GetArray();
      
        if(count($rows) > 0){
         $this->username = trim($valor);

            $this->errores[] = "Este username (".$valor.") ya esta registrado"; 
        }else{
            $this->username = trim($valor);
            return true;
        }
       }else{
        $this->errores[] = "Username no valido"; 
        $this->username = trim($valor);
        return false;
       }
    }
  
public function get_email(){
		
        return $this->email;
    } 
public function set_email($valor){
		$er = new er ();
		if($er->email($valor)==true){
	      $this->email = trim($valor);
	      return true;
        }else{
         $this->errores[] = "e-mail no valido"; 

        return false;
        
        }
    }
public function get_password(){
        return $this->password;
    } 
public function set_password($valor){
		$er = new er ();
		if($er->pass($valor)==true){
        $this->password = trim($valor);
        return true;
        }else{
        	 $this->errores[] = "Contraseña no valida"; 

        }
    }
public function get_rfc(){
        return $this->rfc;
    } 
public function set_rfc($valor){
        $this->rfc = trim($valor);
    }
public function get_cp(){
        return $this->cp;
    } 
public function set_cp($valor){
        $er = new er ();
		if($er->cp($valor)==true){
	       $this->cp = trim($valor);
	       return true;
        }else{
         $this->errores[] = "Codigo Postal no valido"; 

        return false;
        
        }

       
    }


    


}

?>