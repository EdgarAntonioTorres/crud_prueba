<?php session_start();
    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $crud = new Crud();

    $id = $_POST['id']; 
    $datos = array(
        "paterno" => $_POST['ap'],
        "materno" => $_POST['am'],
        "nombre" => $_POST['nombre'],
        "fecha_nacimiento" => $_POST['fechaNacimiento']
    );

    $respuesta = $crud->actualizarDatos($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta -> getMatchedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'update';
        header("location:../index.php");
    } else {
        print_r($respuesta);
    }
    
?>