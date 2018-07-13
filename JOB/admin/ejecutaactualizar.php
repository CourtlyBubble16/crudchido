<?php
	extract($_POST); //de esta manera me ahorro las siguientes 4 lineas, esto funciona gracias a que las declare en el php de update.php
	/*$user = $_POST['user'];
	$email = $_POST['mail'];
	$pass = $_POST['pass'];
	$rol = $_POST['rol'];*/
	require("../conexion/conecta.php");
	$sentencia="update login set user='$user', password='$pass', email='$email', rol='$rol' where id='$id'";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("Error al actualizar")</script> ';
		echo "<script>location.href='index.php'</script>";
	}else {
		echo '<script>alert("Registro Actualizado")</script> ';
		echo "<script>location.href='index.php'</script>";
	}
?>