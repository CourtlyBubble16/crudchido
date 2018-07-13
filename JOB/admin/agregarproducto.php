<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Agregar Producto</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body data-offset="40" style="background-attachment: fixed">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h4>Agregar Producto</h4>
				<div class="row-fluid">
					<form action="agregarpro.php" method="POST">
						<p>Nombre de Plastico</p><input type="text" name="name" placeholder="Nombre"><br>
						<p>Cantidad</p><input type="number" name="cant" placeholder="Cantidad"><br>
						<input type="submit" value="Guardar" class="btn btn-success btn-primary"><br><br>
					</form>
					<a href="productos.php"><input type="submit" value="Volver" class="btn btn-danger"></a>
				</div>
			</div>
		</div>
	</div>
	<script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>