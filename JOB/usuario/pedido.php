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
    <title>Comprador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
<body data-offset="40" style="background-attachment: fixed">
<div class="container">
<div class="row">
	<div class="span12">
		<div class="caption">	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Listado de Productos Disponibles</h4>
		<div class="row-fluid">
			<?php
				require("../conexion/conecta.php");
				$sql=("SELECT * FROM productos WHERE almacen>0");
				$query=mysqli_query($mysqli,$sql);
				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Producto</td>";
						echo "<td>Cantidad en Almacen</td>";
                        echo "<td>Agregar</td>";
					echo "</tr>";
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td><a href='addpedido.php?id=$arreglo[0]'><img src='../img/agregar.png' class='img-rounded'></td>";
						
						$b=$arreglo[1];
				}
				echo "</table>";

			?>
		</div>
</div>
	</div>
</div>
<center>
<a href="carrito.php"><input type="submit" value="Mostrar Pedido" class="btn btn-success"></a>
<a href="index.php"><input type="submit" value="Volver" class="btn btn-danger"></a>
</center>

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