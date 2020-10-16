<?php
if(!empty($_POST['perfil']) || /*!empty($_POST['email']) ||*/ !empty($_FILES['file']['name'])){
    $uploadedFile = '';
    if(!empty($_FILES["file"]["type"])){
        $fileName = time().'_'.$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "uploads/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
    
    $idusuario =$_POST['id_usuario'];
    $perfil = $_POST['perfil'];
    $fecha_inscripcion = $_POST['fecha_inscripcion'];
    $telefono1 = $_POST['telefono1'];
    $telefono2 = $_POST['telefono2'];
    $email = $_POST['email'];
    $documentos = $_POST['documentos'];
    $curso = $_POST['curso'];
    $pagos = $_POST['pagos'];
    $tutor = $_POST['tutor'];
    $fecha_baja = $_POST['fecha_baja'];
    $estatus = $_POST['estatus'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $asesor_inscribio = $_POST['asesor_inscribio'];

    //include database configuration file
    include_once 'dbConfig.php';
    
    //insert form data in the database
    $insert = $db->query("INSERT alumnos (matricula, fecha_inscripcion, nombre, telefono1, telefono2, email, documentos, curso, pagos, tutor, fecha_baja, estatus, foto, ciudad, pais, asesor_inscribio) VALUES ('".$idusuario."','".$fecha_inscripcion."','".$perfil."','".$telefono1."','".$telefono2."','".$email."','".$documentos."','".$curso."','".$pagos."','".$tutor."','".$fecha_baja."','".$estatus."','".$uploadedFile."','".$ciudad."','".$pais."','".$asesor_inscribio."')");
    
    echo $insert?'ok':'err';
}