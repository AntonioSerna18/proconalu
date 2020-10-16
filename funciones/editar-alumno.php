<?php 

    require_once "conexiondb.php";

    if (!$conexion) {
        die ("Conexión fallida: " . mysqli_connect_error());
    }

    $matricula = $_GET['matricula'];
    $sql = "SELECT * FROM alumnos WHERE matricula='".$matricula."'";
    $resultadoCliente = mysqli_query($conexion, $sql);

    while ($fila = mysqli_fetch_assoc($resultadoCliente)) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa De Control De Alumno</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">

        <div class="card">
            <div class="card-header">
                Editar Alumno
            </div>

            <div class="card-body">
                
                <form action="editAlumno.php" method="post">

                    <input type="hidden" name="matricula" value="<?php echo $fila['matricula'] ?>">

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="">Nombre Completo:</label>
                            <input class="form-control" type="text" name="nombre" value="<?php echo $fila['nombre'] ?>" required>
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-6">
                            <label for="">Fecha de inscripción:</label>
                            <input class="form-control" type="date" name="fecha_inscripcion" value="<?php echo $fila['fecha_inscripcion'] ?>" required>
                        </div>

                        <div class="form-group col-6">
                            <label for="">Telefono 1:</label>
                            <input class="form-control" type="text" name="telefono1" value="<?php echo $fila['telefono1'] ?>" required>
                        </div>

                        <div class="form-group col-6">                            
                            <label for="">Telefono 2:</label>
                            <input class="form-control" type="text" name="telefono2" value="<?php echo $fila['telefono2'] ?>">
                        </div>
                        
                        <div class="form-group col-6">
                            <label for="">Email:</label>
                            <input class="form-control" type="email" name="email" value="<?php echo $fila['email']?>">
                        </div>

                        <div class="form-group col-6">
                            <label for="">Documentos:</label>
                            <input class="form-control" type="text" name="documentos" required value="<?php echo $fila['documentos']?>">
                        </div>

                        <div class="form-group col-6">
                            <label for="">Curso:</label>
                            <input class="form-control" type="text" name="curso" required value="<?php echo $fila['curso']?>">
                        </div>

                        <div class="form-group col-6">
                            <label for="">Pagos:</label>
                            <input class="form-control" type="text" name="pagos" required value="<?php echo $fila['pagos'] ?>">
                        </div>

                        <div class="form-group col-6">                            
                            <label for="">Tutor:</label>
                            <input class="form-control" type="text" name="tutor" required value="<?php echo $fila['tutor'] ?>">
                        </div>


                        <div class="form-group col-6">
                            <label for="">Fecha de baja:</label>
                            <input class="form-control" type="date" name="fecha_baja" required value="<?php echo $fila['fecha_baja'] ?>">
                        </div>

                        <div class="form-group col-6">
                            <label for="">Estatus:</label>
                            <input class="form-control" type="text" name="estatus" required value="<?php echo $fila['estatus'] ?>">
                        </div>

                        <div class="form-group col-6">
                            <label for="">Foto:</label>
                            <input class="form-control" type="file" name="foto" required value="<?php echo $fila['foto'] ?>">
                        </div>

                        <div class="form-group col-6">
                            <label for="">Ciudad:</label>
                            <input class="form-control" type="text" name="ciudad" required value="<?php echo $fila['ciudad'] ?>">
                        </div>

                        <div class="form-group col-6">
                            <label for="">Pais:</label>
                            <input class="form-control" type="text" name="pais" required value="<?php echo $fila['pais'] ?>">
                        </div>

                        <div class="form-group col-6">
                            <label for="">Asesor que inscribio:</label>
                            <input class="form-control" type="text" name="asesor_inscribio" required value="<?php echo $fila['asesor_inscribio'] ?>">
                        </div>

                    </div>
                    <div class="form-group">
                        <input class="btn btn-success btn-block" type="submit" value="Editar">
                    </div>
                    <a href="../index.php" type="button" class="btn btn-success">
                    Inicio
                </a>
                </form>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>

<?php 

    }

?>