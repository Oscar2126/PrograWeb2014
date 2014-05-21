<?php      
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Caracol.php');
?>
<?php
    
    $caracol = new Caracol();
    $caracol->set_profundidad($_POST["profundidad"]);
    $caracol->set_sube($_POST["sube"]);
    $caracol->set_baja($_POST["baja"]);
    $caracol->set_dias($_POST["dias"]);
    $caracol->inserta($caracol->get_atributos());
  //print_r($_POST);

  
  $caracol->show_grid('*', ' ','10');
?>


