<?php
	$name=$_POST['user'];
	$mail=$_POST['mail'];
	$pass= $_POST['pass'];
	$pass2= $_POST['pass2'];
	require("../conexion/conecta.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$pass2){
			if($check_mail>0){
				echo '<script>alert("Este correo ya se encuentra en uso")</script> ';
				echo "<script>location.href='regadmin.php'</script>";
			}else{
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$name','','$mail','$pass','1')");
				echo '<script>alert("Administrador Registrado con Exito")</script> ';
				echo "<script>location.href='index.php'</script>";
			}
		}else{
			echo '<script>alert("Las Contraseñas no coinciden")</script> ';
			echo "<script>location.href='regadmin.php'</script>";
		}
?>