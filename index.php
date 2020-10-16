<?php

    require_once "funciones/conexiondb.php";

    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa De Control De Alumnos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"> </script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>

    <div class="container-fluid mt-5">

        <div class="card">

            <div class="card-header">
                Programa De Control De Alumnos
            </div>

            <div class="card-body">

                <a href="funciones/addAlumno.php" type="button" class="btn btn-success">
                    Agregar Alumno
                </a>

                <a href="excel/exportar.php" class="btn btn-danger">Exportar lista de alumnos a Excel</a>

                <table class="table table-striped table-hover mt-3 table-sm table-responsive table-responsive-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>Matricula</th>
                            <th>Fecha de inscripción</th>
                            <th>Nombre completo</th>
                            <th>Telefono 1</th>
                            <th>Telefono 2</th>
                            <th>Email</th>
                            <th>Documentos</th>
                            <th>Curso/Diplomado</th>
                            <th>Pagos</th>
                            <th>Tutor</th>
                            <th>Fecha de baja</th>
                            <th>Estatus</th>
                            <th>Foto</th>
                            <th>Ciudad</th>
                            <th>País</th>
                            <th>Asesor que lo inscribio</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($conexion->query('SELECT matricula, fecha_inscripcion, nombre, telefono1, telefono2, email, documentos, curso, pagos, tutor, fecha_baja, estatus, foto, ciudad, pais, asesor_inscribio FROM alumnos') as $row) { ?>
                            <tr>
                                <td><?php echo $row['matricula'] ?></td>
                                <td><?php echo $row['fecha_inscripcion'] ?></td>
                                <td><?php echo $row['nombre'] ?></td>
                                <td><?php echo $row['telefono1'] ?></td>
                                <td><?php echo $row['telefono2'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['documentos'] ?></td>
                                <td><?php echo $row['curso'] ?></td>
                                <td><?php echo $row['pagos'] ?></td>
                                <td><?php echo $row['tutor'] ?></td>
                                <td><?php echo $row['fecha_baja'] ?></td>
                                <td><?php echo $row['estatus'] ?></td>
                                <td><?php echo $row['foto'] ?></td>
                                <td><?php echo $row['ciudad'] ?></td>
                                <td><?php echo $row['pais'] ?></td>
                                <td><?php echo $row['asesor_inscribio'] ?></td>
                                <td>
                                    <a href="funciones/editar-alumno.php?matricula=<?php echo $row['matricula'] ?>" type="button" class="btn btn-warning">
                                        Editar
                                    </a>
                                    <a href="funciones/deleteAlumno.php?matricula=<?php echo $row['matricula'] ?>" type="button" class="btn btn-danger">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>

            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>