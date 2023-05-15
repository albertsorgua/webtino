<?php

// Starting the session, to use and
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css"
					href="style.css">
</head>
<body>
	<div class="header">
		<h2>Frankfurt Tino</h2>
	</div>
	<div class="content">

		<!-- Creating notification when the
				user logs in -->
		
		<!-- Accessible only to the users that
				have logged in already -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- information of the user logged in -->
		<!-- welcome message for the logged in user -->
		<?php if (isset($_SESSION['username'])) : ?>
			


<p>
				Bienvenido
				<strong>
					<?php echo $_SESSION['username']; ?>
				</strong>
			</p>



			


<p>
				<a href="index.php?logout='1'" style="color: red;">
					Click here to Logout
				</a>
			</p>



		<?php endif ?>
	</div>
	
	<footer>
        <hr style="margin: 40px;">
        <div id="contacto">
            <h3>CONTACTA CON NOSOTROS</h3>
            <a href="657 945 393">657 945 393</a><br><br>
            <a href="mailto:frankfurttino@hotmail.com">frankfurttino@hotmail.com</a><br><br>
            <a href="https://goo.gl/maps/gtUW9E3RGhN8QmXZ6">Carrer Francesc Ferrer i Guardia, 21 Local 19, 08100 Mollet
                del Vallès, Barcelona</a>
        </div>
        <img src="/img/logofrankfurttino.png">
        <div id="enlaces">
            <h3>ENLACES LEGALES</h3>
            <p>Aviso Legal</p>
            <p>Política de Privacidad</p>
            <p>Política de Cookies</p>
        </div>
    </footer>
</body>
</html>
