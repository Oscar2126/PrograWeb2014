<?php
	    include ('../../libs/adodb5/adodb-pager.inc.php');
	    include ('../../libs/adodb5/adodb.inc.php');
	    include ('../../libs/er.php');
	    include ('../../models/Conexion.php');
	    include ('../../models/Modelo.php');
	    include ('../../models/Examen.php');
	    include ('../layouts/header.php');
?>

<?php
		$exm = new Examen();
	if (isset($_POST["username"])) {
		echo "recibido";
		if($exm->set_username($_POST["username"])){
		  $aux=" has-success";
		}else{
		$aux=" has-error";
		}
		if($exm->set_email($_POST["email"])){
		 $aux1="has-success";
		}else{
		 $aux1="has-error";
		}
		if($exm->set_password($_POST["password"])){
		 $aux2="has-success";
		}else{
	 	 $aux2="has-error";
		}
		
		$exm->set_rfc($_POST["rfc"]);
		if($exm->set_cp($_POST["cp"])){
		 $aux3="has-success";
		}else{
		 $aux3="has-error";
		}
		
		if(count($exm->errores)>0){
				
		}else{
		if($exm->inserta($exm->get_atributos())){
		echo " OK ";
		}else{
		 
		}
		}
		}


		//$caracol->inserta($caracol->get_atributos());

	$rs = $exm->consulta_datos();
	//$exm->show_grid('*', ' ','10');
	print_r($exm->Get_atributos());
?>	

<div class="row container">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Registro:</h3>
			</div>
			<div class="panel-body">
				<form  method="POST">
					<div class="form-group <? echo $aux;?> ">
						<label for="Altura">Username: </label>
						<input class="form-control" name="username" type="text" value="<? echo $exm->get_username();?>">
						
						
					</div>
					<div class="form-group <? echo $aux1;?>">
						<label for="Altura">Email: </label>
						<input class="form-control" name="email" type="text" value="<? echo $exm->get_email();?>">

					</div>
					<div class="form-group <? echo $aux2;?>">
						<label for="Altura">Password: </label>
						<input class="form-control" name="password" type="text" value="<? echo $exm->get_password();?>">

					</div>
					<div class="form-group <? echo $aux2;?>">
						<label for="Altura">RFC: </label>
						<input class="form-control" name="rfc" type="text">
					</div>
					<div class="form-group <? echo $aux3;?>">
						<label for="Altura">Codigo Postal: </label>
						<input class="form-control" name="cp" type="text" value="<? echo $exm->get_cp();?>">

					</div>
					<input id="boton" class="btn btn-default" type="submit" value="Enviar">
				</form>
			</div>
		</div>
	</div>
</div>
