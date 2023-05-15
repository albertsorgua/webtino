        <?php

        $conn = mysqli_connect("localhost", "root", "", "tino");

        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $id = $_REQUEST['usuario'];
        $gente = $_REQUEST['gente'];
        $dia = $_REQUEST['dia'];
        $hora = $_REQUEST['hora'];

        $sql = "INSERT INTO reservarmesa VALUES ('$id', '$gente',
            '$dia', '$hora')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>Su reserva ha sido realizada con exito. En breves le llegará un correo de confirmación.</h3>";

            echo nl2br("Personas: $gente\n Día: $dia\n Hora: $hora\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>