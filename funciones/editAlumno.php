<?php 

    require_once "conexiondb.php";

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $updateCliente = "UPDATE alumnos SET 
                    nombre = '$_POST[nombre]',
                    fecha_inscripcion = '$_POST[fecha_inscripcion]',
                    telefono1 = '$_POST[telefono1]',
                    telefono1 = '$_POST[telefono1]',
                    email = '$_POST[email]',
                    documentos = '$_POST[documentos]',
                    curso = '$_POST[curso]',
                    pagos = '$_POST[pagos]',
                    tutor = '$_POST[tutor]',
                    fecha_baja = '$_POST[fecha_baja]',
                    estatus = '$_POST[estatus]',
                    foto = '$_POST[foto]',
                    ciudad = '$_POST[ciudad]',
                    pais = '$_POST[pais]',
                    asesor_inscribio = '$_POST[asesor_inscribio]'
                    
                    WHERE matricula = '$_POST[matricula]' ";
    
    if (mysqli_query($conexion, $updateCliente)) {
        echo "<br />" . "<h3>Los datos del cliente fueron actualizados</h3>";
        header('location: ../index.php');
    } else {
        echo "Error: " . $updateCliente . "<br />" . mysqli_error($conexion);
    }

    mysqli_close($conexion);

?>