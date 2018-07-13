<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../index.php");
}elseif ($_SESSION['rol']==1) {
	header("Location:../admin/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
<body data-offset="40" style="background-attachment: fixed">
<div class="container">
<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><h5>Comprador</h5></li>
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php $a = $_SESSION['user'];echo $a;?></strong> </a></li>
			  <li><a href="pedido.php"> Realizar Pedido</a></li><li><a href="../conexion/logout.php"> Cerrar Sesión </a></li>			 
		</ul>
	  </div>
	</div>
  </div>
</div>
  </body>
</html>