<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Registrarse
	</title>
	<link rel="icon" href="/img/logofrankfurttino.png">
	<link rel="stylesheet" type="text/css"
					href="style.css">
</head>

<body>
	<div class="header">
		<h2>Registrarse</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Inserta el nombre:</label>
			<input type="text" name="name"
				value="<?php echo $name; ?>">
		</div>
		
		<div class="input-group">
			<label>Inserta el apellido:</label>
			<input type="text" name="surname"
				value="<?php echo $surname; ?>">
		</div>

		<div class="input-group">
			<label>Inserta el usuario:</label>
			<input type="text" name="username"
				value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Inserta el email:</label>
			<input type="email" name="email"
				value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Inserta tu dirección:</label>
			<input type="direccion" name="direccion"
				value="<?php echo $direccion; ?>">
		</div>
		<div class="input-group">
			<label>Inserta la contraseña:</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirma la contraseña:</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"
								name="reg_user">
				Registrate
			</button>
		</div>
		


<p>
			¿Ya tienes cuenta?
			<a href="login.php">
				Inicia sesión
			</a>
		</p>



	</form>
</body>
</html>
