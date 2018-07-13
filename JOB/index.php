<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>CRUD CHIDO</title>
</head>
<body background="images/admi.jpg" style="background-attachment: fixed">
	<center>
		<div class="tit">
			<h2 style="color: #0000FF; ">Iniciar Sesión</h2>
			<center>
				<div class="Ingreso">
					<table border="0" align="center" valign="middle">
						<td rowspan=2>
							<form action="conexion/validar.php" method="POST">
								<table border="0">
									<tr>
										<td><label style="font-size:14"><b>Correo: </b></label></td>
										<td width=80><input type="text" name="mail" class="form-group has-success" style="border-radius: 15px"></td>
									</tr>
									<tr>
										<td><label style="font-size:14"><b>Contraseña: </b></label></td>
										<td width=80><input type="password" name="pass" style="border-radius: 15px"></td>
									</tr>
									<td width=80 align="center"><input type="submit" value="Iniciar sesión" class="btn btn-primary"></td>
								</table>
							</form>
						</td>
					</table>
				</div>
			</center>
		</div>
	</center>

	<center>
		<div class="tit">
			<h2 style="color: #0000FF; ">Registrarme</h2>
			<center>
				<div class="Ingreso">
					<table border="0" align="center" valign="middle">
						<td rowspan=2>
							<form action="conexion/registro.php" method="POST">
								<table border="0">
									<tr>
										<td><label style="font-size:14"><b>Nombre: </b></label></td>
										<td width=80><input type="text" name="name" class="form-group has-success" style="border-radius: 15px"></td>
									</tr>
									<tr>
										<td><label style="font-size:14"><b>Correo: </b></label></td>
										<td width=80><input type="text" name="mail" class="form-group has-success" style="border-radius: 15px"></td>
									</tr>
									<tr>
										<td><label style="font-size:14"><b>Contraseña: </b></label></td>
										<td width=80><input type="password" name="pass" style="border-radius: 15px"></td>
									</tr>
									<tr>
										<td><label style="font-size:14"><b>Confirmar Contraseña: </b></label></td>
										<td width=80><input type="password" name="pass2" style="border-radius: 15px"></td>
									</tr>
									<td width=80 align="center"><input type="submit" value="Registrarme" class="btn btn-primary"></td>
								</table>
							</form>
						</td>
					</table>
				</div>
			</center>
		</div>
	</center>

</body>
</html>