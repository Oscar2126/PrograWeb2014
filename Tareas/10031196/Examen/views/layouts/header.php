<?php define('BASEURL','http://localhost/prograWeb'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase programacion web</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/mi.css" rel="stylesheet">
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Programacion Web</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo BASEURL; ?>/views/site/inicio.php">Inicio</a></li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tareas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo BASEURL; ?>/views/caracol/caracol.php">Caracol</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Otras</li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Practicas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Loteria</a></li>
                <li><a href="<?php echo BASEURL; ?>/views/ajax/index.php">Ajax</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Examenes</li>
                <li><a href="#">Examen 2</a></li>
              </ul>
            </li>


          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">

