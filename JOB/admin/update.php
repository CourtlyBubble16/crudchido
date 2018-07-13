<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:../index.php");
}
?>
<!DOCTYPE html>	
<html lang="en">
  <head>
    <title>Actualizar</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
<body data-offset="40" style="background-attachment: fixed">
<div class="container">
<header class="header">
</header>
<div class="row">
	<div class="span12">
		<div class="caption">
		<h2> Actualización de Usuarios</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Actualizar usuario</h4>
		<div class="row-fluid">
		<?php
		extract($_GET);
		require("../conexion/conecta.php");
		$sql="SELECT * FROM login WHERE id=$id";
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    	$pasadmin=$row[4];
                $rol=$row[5];
		    }
		?>
		<form action="ejecutaactualizar.php" method="post">
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Usuario<br> <input type="text" name="user" value="<?php echo $user?>"><br>
				Password usuario<br> <input type="text" name="pass" value="<?php echo $pass?>"><br>
				Correo usuario<br> <input type="text" name="email" value="<?php echo $email?>"><br>
                Rol<br><select name="rol">
                	<option>1</option>
                	<option>2</option>
                </select>				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
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