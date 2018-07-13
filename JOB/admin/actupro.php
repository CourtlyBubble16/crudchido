<?php
	extract($_POST); 
	require("../conexion/conecta.php");
	$sentencia="update productos set nombre='$name', almacen='$cant' where id='$id'";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("Error al actualizar")</script> ';
		echo "<script>location.href='productos.php'</script>";
	}else {
		echo '<script>alert("Registro Actualizado")</script> ';
		echo "<script>location.href='productos.php'</script>";
	}
?>