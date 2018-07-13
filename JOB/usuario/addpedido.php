<?php
	/*session_start();
	$x = $_SESSION['id'];
	$can=$_POST['can'];
	require("../conexion/conecta.php");
	$resultados = mysqli_query($mysqli,"SELECT * FROM productos WHERE id=1");
		while ($consulta = mysqli_fetch_array($resultados)) {
			echo $a = $consulta['nombre'];
		}
	mysqli_query($mysqli,"INSERT INTO pedidos VALUES('$x','$a','$can')");
	echo '<script>alert("Producto Agregado con Exito")</script> ';
	echo "<script>location.href='index.php'</script>";
	*/
?>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../index.php");
}
?>
<!DOCTYPE html>	
<html lang="en">
  <head>
    <title>Agregar</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
<body data-offset="40" style="background-attachment: fixed">
<div class="container">
<header class="header">
</header>
<div class="row">
	<div class="span12">
		<div class="caption">
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Agregar Producto</h4>
		<div class="row-fluid">
		<?php
		extract($_GET);
		require("../conexion/conecta.php");
		$sql="SELECT * FROM productos WHERE id=$id";
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$name=$row[1];
		    }
		?>
		<form action="pedidos.php" method="post">
				<p>ID</p><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				<p>Nombre</p><input type="text" name="names" value="<?php echo $name?>" readonly="readonly"><br>
				<p>Cantidad</p><input type="number" name="cant" value="" placeholder="Cantidad Requerida"><br>
				<input type="submit" value="Agregar" class="btn btn-success btn-primary">
			</form>
		<div class="span8">
		</div>	
		
		</div>	
		
	<a href="index.php"><input type="submit" value="Volver" class="btn btn-danger"></a>
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