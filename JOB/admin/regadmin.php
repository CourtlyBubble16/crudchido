<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../index.php");
}
?>
<!DOCTYPE html>	
<html lang="en">
  <head>
    <title>Administrador</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
<body data-offset="40" style="background-attachment: fixed">
<div class="container">
<header class="header">
</header>
<div class="row">
	<div class="span12">
		<div class="caption">
		<h2> Registrar nuevo administrador</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<div class="row-fluid">
		<form action="reg.php" method="post">
			<p>Usuario</p><input type="text" name="user" placeholder="Nombre">
				<p>Correo</p><br> <input type="text" name="mail" placeholder="Nuevo Correo">
				<p>Contraseña</p><br> <input type="password" name="pass" placeholder="Nueva Contraseña">
				<p>Confirmar Contraseña</p><br> <input type="password" name="pass2" placeholder="Confirmar Contraseña">
                <p>Rol</p><br><select name="rol">
                	<option>1</option>
                </select>				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
		<div class="span8">
		</div>	
		</div>	
		<a href="index.php"><input type="submit" value="Cancelar" class="btn btn-danger"></a>
		<br/></div>
</div>
	</div>
</div>
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
 </footer>
</div>
    <script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>