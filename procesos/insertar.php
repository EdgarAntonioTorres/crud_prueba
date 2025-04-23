<?php session_start();
    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $crud = new Crud();

    $datos = array(
        "paterno" => $_POST['ap'],
        "materno" => $_POST['am'],
        "nombre" => $_POST['nombre'],
        "fecha_nacimiento" => $_POST['fechaNacimiento']
    );

    $respuesta =  $crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0) {
        $_SESSION['mensaje_crud'] = 'insert';
        header("location:../index.php");
    } else {
        print_r($respuesta);
    }
?>