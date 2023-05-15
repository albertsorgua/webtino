<?php

$conn = mysqli_connect("localhost", "root", "", "tino");

if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$id = $_REQUEST['usuario'];
$comida = $_REQUEST['comida'];
$bebida = $_REQUEST['bebida'];


$sql = "INSERT INTO pedido VALUES ('$id', '$comida', '$bebida')";

if(mysqli_query($conn, $sql)){
    echo "<h3>Su reserva ha sido realizada con exito. En breves recibirá su pedido.</h3>";
    echo "<h3>El pago se realizará a través del repartidor (El le informará de la cantidad).</h3>";
    echo nl2br("Comida: $comida\n Bebida: $bebida\n");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

mysqli_close($conn);
?>