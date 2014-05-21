	<?php

class Caracol extends Modelo{
    public $nombre_tabla = 'caracol';
    public $pk = 'id_caracol';
    
    
    public $atributos = array(
        'sube'=>array(),
        'baja'=>array(),
        'profundidad'=>array(),
        'dias'=>array()
    );
    
    public $errores = array( );
    
    private $sube;
    private $baja;
    private $profundidad;
    private $dias;
       
    
    function Caracol(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_sube(){
        return $this->sube;
    } 
    public function set_sube($valor){
        $this->sube = trim($valor);
    }

    public function get_baja(){
        return $this->baja;
    } 
    public function set_baja($valor){
        $this->baja = trim($valor);
    }
    
    public function get_profundidad(){
        return $this->profundidad;
    } 
    public function set_profundidad($valor){
        $this->profundidad = trim($valor);
    }

    public function get_dias(){
        return $this->dias;
    } 
    public function set_dias($valor){
        $this->dias = trim($valor);
    } 
	
    
    public function set_email($valor){
        
        $rs = $this->consulta_sql("select * from evt_asistentes where email = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->email = "";
            $this->errores[] = "Este e-mail (".$valor.") ya esta registrado"; 
        }else{
            $this->email = trim($valor);
        }
        
    } 
    


    
    
    
}

?>
