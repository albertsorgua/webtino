<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Inicia sesión
	</title>
	<link rel="icon" href="/img/logofrankfurttino.png">
	<link rel="stylesheet" type="text/css"
			href="style.css">
</head>
<body>
	<div class="header">
		<h2>Inicia sesión</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Inserta el usuario:</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Inserta la contraseña:</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"
						name="login_user">
				Login
			</button>
		</div>
		


<p>
			¿No tienes cuenta?
			<a href="register.php">
				Registrate!
			</a>
		</p>



	</form>
</body>

</html>