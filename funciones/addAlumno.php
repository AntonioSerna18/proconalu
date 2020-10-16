<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"> </script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Programa De Control De Alumno</title>
</head>

<body>
	 <div class="container mt-5">

        <div class="card">
            
            <div class="card-header">
                Agregar Alumno
            </div>

	<div class="card-body">

			<form enctype="multipart/form-data" id="fupForm">

			<div class="form-row">
				<div class="form-group col-6">
					<label for="perfil">Nombre Completo</label>
					<input type="text" class="form-control" id="perfil" name="perfil" required />
				</div>

				<div class="form-group col-6">
					<label for="id_usuario">Matricula</label>
					<input type="text" class="form-control" id="id_usuario" name="id_usuario" required />
				</div>

				<div class="form-group col-6">
					<label for="fecha_inscripcion">Fecha de Inscripcion</label>
					<input type="date" class="form-control" id="fecha_inscripcion" name="fecha_inscripcion" required />
				</div>

				<div class="form-group col-6">
					<label for="telefono1">Telefono 1</label>
					<input type="text" class="form-control" id="telefono1" name="telefono1" required />
				</div>

				<div class="form-group col-6">
					<label for="telefono2">Telefono 2</label>
					<input type="text" class="form-control" id="telefono2" name="telefono2" required />
				</div>

				<div class="form-group col-6">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" required />
				</div>
				<div class="form-group col-6">
					<label for="documentos">Documentos</label>
					<input type="text" class="form-control" id="documentos" name="documentos" required />
				</div>

				<div class="form-group col-6">
					<label for="curso">Curso/Diplomado</label>
					<input type="text" class="form-control" id="curso" name="curso" required />
				</div>

				<div class="form-group col-6">
					<label for="pagos">Pagos:</label>
					<input type="text" class="form-control" id="pagos" name="pagos" required />
				</div>

				<div class="form-group col-6">
					<label for="tutor">Tutor:</label>
					<input type="text" class="form-control" id="tutor" name="tutor" required />
				</div>

				<div class="form-group col-6">
					<label for="fecha_baja">Fecha de baja:</label>
					<input type="date" class="form-control" id="fecha_baja" name="fecha_baja" required />
				</div>

				<div class="form-group col-6">
					<label for="estatus">Estatus:</label>
					<input type="text" class="form-control" id="estatus" name="estatus" required />
				</div>

				<div class="form-group col-6">
					<label for="file">Foto</label>
					<input type="file" class="form-control-file alert alert-secondary" id="file" name="file" required />
				</div>

				<div class="form-group col-6">
					<label for="ciudad">Ciudad:</label>
					<input type="text" class="form-control" id="ciudad" name="ciudad" required />
				</div>

				<div class="form-group col-6">
					<label for="pais">País:</label>
					<input type="text" class="form-control" id="pais" name="pais" required />
				</div>

				<div class="form-group col-6">
					<label for="asesor_inscribio">Asesor que inscribio</label>
					<input type="text" class="form-control" id="asesor_inscribio" name="asesor_inscribio" required />
				</div>
				<center>
				<input type="submit" name="submit" class="btn btn-success submitBtn" value="Guardar" />

				<a href="../index.php" type="button" class="btn btn-success">
                    Inicio
                </a>
                </center>
            </div>    
			</form>
		</div>
	</div>
		<script>
			$(document).ready(function(e) {
			$("#fupForm").on('submit', function(e) {
			e.preventDefault();
				$.ajax({
					type: 'POST',
					url: 'agregar/submit.php',
					data: new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					beforeSend: function() {
					$('.submitBtn').attr("disabled", "disabled");
					$('#fupForm').css("opacity", ".5");
					},
					success: function(msg) {
  					$('.statusMsg').html('');
					if (msg == 'ok') {
					$('#fupForm')[0].reset();
			/*   Swal.fire('Datos guardados');*/
					Swal.fire({
						position: 'center',
						icon: 'success',
						title: 'Registro Exitoso!!',
						showConfirmButton: false,
						timer: 1500
					});
			/* $('.statusMsg').html('<span style="font-size:18px;color:#34A853">Datos Guardados Correctamente!!</span>'); */
					} else {
						Swal.fire({
							icon: 'error',
							title: 'Oops...',
							text: 'Parece que halgo salio mal!',
								})
			/* $('.statusMsg').html('<span style="font-size:18px;color:#EA4335">Error.</span>'); */
						}
							$('#fupForm').css("opacity", "");
							$(".submitBtn").removeAttr("disabled");
																}
															});
														});

			//file type validation
					$("#file").change(function() {
						var file = this.files[0];
						var imagefile = file.type;
						var match = ["image/jpeg", "image/png", "image/jpg"];
						if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2]))) {
							Swal.fire(
								'Formato No Valido',
								'Elige un formato valido (PNG,JPG,JPEG)'
									);
			/*alert('Por favor selecciona un formato valido (JPEG/JPG/PNG).');*/
								$("#file").val('');
									return false;
										}
									});
										});
			</script>
											</div>

										</div>



</body>

</html>