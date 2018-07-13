<?php
	require("../conexion/conecta.php");
	session_start();
	$x = $_SESSION['id'];
	$names=$_POST['names'];
	$cant=$_POST['cant'];
	$checkname=mysqli_query($mysqli,"SELECT * FROM pedido WHERE productos='$names'");
				if($cant==0){
				echo '<script>alert("La cantidad debe ser mayor a 0")</script> ';
				echo "<script>location.href='pedido.php'</script>";	
				}else{
				mysqli_query($mysqli,"INSERT INTO pedido VALUES('','$x','$names','$cant')");
				echo '<script>alert("Producto Agregado con Exito")</script> ';
				echo "<script>location.href='pedido.php'</script>";	
				}
			
?>