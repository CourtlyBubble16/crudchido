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
    <title>Carrito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
<body data-offset="40" style="background-attachment: fixed">
<div class="row">
	<div class="span12">
		<div class="caption">
		<h4>Listado de Plasticos que compraras</h4>	
		<div class="well well-small">
		<hr class="soft"/>
		<div class="row-fluid">
			<?php
				require("../conexion/conecta.php");
				$a = $_SESSION['id'];
				$sql=("SELECT id,idpersona,productos,almacen FROM pedido WHERE idpersona=$a");
				$query=mysqli_query($mysqli,$sql);
				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Tu ID</td>";
						echo "<td>Producto</td>";
						echo "<td>Cantidad</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
						echo "<td><a href='carrito.php?id=$arreglo[0]&idborrar=2'><img src='../img/eliminar.png' class='img-rounded'/></a></td>";
						echo "</tr>";
						$b=$arreglo[1];
				}
				echo "</table>";
					extract($_GET);	
					if(@$idborrar==2){
						if($a!=$b){
						$sqlborrar="DELETE FROM pedido WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='index.php'</script>";
						}
				}
			?>
		</div>
</div>
	</div>
	<a href="carrito.php"><input type="submit" value="Confirmar" class="btn btn-success"></a>
<a href="index.php"><input type="submit" value="Volver" class="btn btn-danger"></a>
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