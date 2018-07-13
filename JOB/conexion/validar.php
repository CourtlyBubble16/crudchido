<?php
session_start();
	require("conecta.php");
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];
			echo '<script>alert("Bienvenido Administrador")</script> ';
			echo "<script>location.href='../admin/index.php'</script>";
		}
	}
	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];
			echo '<script>alert("Bienvenido Comprador")</script> ';
			echo "<script>location.href='../usuario/index.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
			echo "<script>location.href='../index.php'</script>";
		}
	}else{
		echo '<script>alert("Este usuario no existe, por favor registrese para poder ingresar")</script> ';
		echo "<script>location.href='../index.php'</script>";	
	}
?>