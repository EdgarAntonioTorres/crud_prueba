<?php 
    include "./header.php";
    include "./clases/Conexion.php";
    include "./clases/Crud.php";
    
    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
    $idMongo = $datos->_id;
?>

<div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <a href="index.php" class="btn btn-outline-danger">
                            <i class="fa-solid fa-arrow-left"></i> Regresar
                        </a>
                        <h2>Actualizar registro</h2>
                        <form action="./procesos/actualizar.php" method="POST">
                            <input type="text" hidden value="<?php echo $idMongo ?>" name="id">
                            <label for="ap">Apellido paterno</label>
                            <input type="text" class="form-control" id="ap" name="ap" value="<?php echo $datos->paterno ?>">
                            <label for="nombre">Apellido materno</label>
                            <input type="text" class="form-control" id="am" name="am" value="<?php echo $datos->materno ?>">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos->nombre ?>">
                            <label for="fechaNacimiento">Fecha de nacimiento</label>
                            <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" value="<?php echo $datos->fecha_nacimiento ?>">
                            <button class="btn btn-warning mt-3">
                                <i class="fa-solid fa-floppy-disk"></i> Actualizar 
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "./scripts.php"; ?>