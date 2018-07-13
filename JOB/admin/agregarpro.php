<?php
	$name=$_POST['name'];
	$cant=$_POST['cant'];
	require("../conexion/conecta.php");
	$checkname=mysqli_query($mysqli,"SELECT * FROM productos WHERE nombre='$name'");
	$check_cant=mysqli_num_rows($checkname);
			if($check_cant>0){
				echo '<script>alert("Este producto ya existe")</script> ';
				echo "<script>location.href='agregarproducto.php'</script>";
			}else{
				if($cant==0){
				echo '<script>alert("La cantidad debe ser mayor a 0")</script> ';
				echo "<script>location.href='agregarproducto.php'</script>";	
				}else{
				mysqli_query($mysqli,"INSERT INTO productos VALUES('','$name','$cant')");
				echo '<script>alert("Producto Agregado con Exito")</script> ';
				echo "<script>location.href='productos.php'</script>";	
				}
			}
?>