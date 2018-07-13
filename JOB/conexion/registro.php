<?php
	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$pass= $_POST['pass'];
	$pass2=$_POST['pass2'];
	require("conecta.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$pass2){
			if($check_mail>0){
				echo '<script>alert("Este correo ya se encuentra en uso")</script> ';
				echo "<script>location.href='../index.php'</script>";
			}else{
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$name','$pass','$mail','','2')");
				echo '<script>alert("Usuario Registrado con Exito")</script> ';
				echo "<script>location.href='../index.php'</script>";
			}
		}else{
			echo '<script>alert("Las Contraseña no coinciden")</script> ';
			echo "<script>location.href='../index.php'</script>";
		}
?>