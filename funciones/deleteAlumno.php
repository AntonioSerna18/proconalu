

<?php 
require_once "conexiondb.php";

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $matricula = $_GET['matricula'];
    $deleteAlumno = "DELETE FROM alumnos WHERE matricula='".$matricula."'";
    $alumnoEliminado = mysqli_query($conexion, $deleteAlumno);


	header('location: ../index.php');


?>