<?php 

session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
$usuario = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/html/style.css">
    <link rel="icon" href="/img/logofrankfurttino.png">
    <title>Pedido Tino</title>
</head>
<?php if (isset($_SESSION['username'])) : ?>
            <p>Bienvenido <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1'" style="color: red;">Click here to Logout</a></p>
<?php endif ?>

<body>
<header id="titulo">
        <a href="/html/index.html"><img src="/img/logotipo-.jpg" width="200px"></a>
        <h1>Frankfurt Tino</h1><br>
        <h2><a href="/html/index.html">Inicio</a></h2>
        <h2><a href="/inicio_sesión-registro-pedido/">Pedido</a></h2>
        <h2><a href="/inicio_sesión-registro-reservar_mesa/">Reservar mesa</a></h2>
    </header>   
        <hr style="margin-bottom: 10px; margin-top: 40px;">

    <br>
    <div class="form">
        <form action="insertarmesa.php" action="mailto:$direccion" method="POST">
            <h1>¿Desea reservar mesa?</h1><br>
            <h2>Rellena el formulario:</h2><br>
            <input type="hidden" name="usuario" value="<?php echo $usuario ?>" />
            <label for="gente">Indique el número de personas:</label>
            <p style="font-size: 11px;">(Si necesita una reserva más grande, póngase en contacto con nosotros.)</p>
            <input type="number" name="gente" min="1" max="6" placeholder="Gente" required>
            <BR><br>
            <label for="dia">Escoja el día deseado:</label>
            <br>
            <input type="date" name="dia" placeholder="Día" required>
            <br>
            <br>
            <label for="dia">Escoja la hora deseada:</label>
            <br>
            <input type="time" name="hora" placeholder="Hora" required>
            <br>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <footer>
        <hr style="margin-bottom: 40px; margin-top: 40px;">
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