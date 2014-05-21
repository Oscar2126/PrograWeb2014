<?php
  include ('../layouts/header.php');
?>


<div class="row">
	

	<div class="col-md-6">
		<div class="panel panel-default">
		  <div class="panel-heading">Practica ajax</div>
		  <div class="panel-body">
		    <button type="button" class="btn btn-primary" id="btnAjax" >Ajax</button>
		  </div>
		</div>
		
	</div>

  	<div class="col-md-6">
		<div class="panel panel-default">
		  <div class="panel-heading">Formulario del caracol</div>
		  <div class="panel-body">
		    <label for="profundidad">Profundidad</label>
				<input type="text" name="profundidad" id="profundidad">
			<label for="sube">Sube</label>
				<input type="text" name="sube" id="sube">
			<label for="baja">Baja</label>
				<input type="text" name="baja" id="baja">
			<label for="dias">Dias</label>
				<input type="text" name="dias" id="dias">

		  </div>
		</div>
		
	</div>


  	<div class="col-md-6" >

  		<div class="panel panel-default">
		  <div class="panel-heading">Practica ajax</div>
		  <div class="panel-body" id="loadAjax">
		    .......
		  </div>
		</div>	
  	</div>

</div>




<?php include ('../layouts/footer.php'); ?>
