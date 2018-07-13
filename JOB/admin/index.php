<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:../usuario/index.php");
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
			<li class=""><h5>Administrador</h5></li>
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php $a = $_SESSION['user'];echo $a;?></strong> </a></li>
			  <li><a href="regadmin.php"> Registrar Administradores</a></li><li><a href="productos.php"> Ver Productos</a></li><li><a href="../conexion/logout.php"> Cerrar Sesión </a></li>			 
		</ul>
	  </div>
	</div>
  </div>
</div>
<div class="row">
	<div class="span12">
		<div class="caption">
		<h2> Administración de usuarios registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Usuarios</h4>
		<div class="row-fluid">
			<?php
				require("../conexion/conecta.php");
				$sql=("SELECT id,user,password,email,rol FROM login WHERE rol>1");
				$query=mysqli_query($mysqli,$sql);
				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Usuario</td>";
						echo "<td>Password</td>";
						echo "<td>Correo</td>";
						echo "<td>Rol</td>";
                        echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
                        echo "<td>$arreglo[4]</td>";
				    	echo "<td><a href='update.php?id=$arreglo[0]'><img src='../img/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='index.php?id=$arreglo[0]&idborrar=2'><img src='../img/eliminar.png' class='img-rounded'/></a></td>";
						echo "</tr>";
						$b=$arreglo[1];
				}
				echo "</table>";
					extract($_GET);	
					if(@$idborrar==2){
						if($a!=$b){
						$sqlborrar="DELETE FROM login WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='index.php'</script>";
						}
				}
			?>
		</div>
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