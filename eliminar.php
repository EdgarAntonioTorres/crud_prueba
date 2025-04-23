<?php 
    include "./clases/Conexion.php";
    include "./clases/Crud.php";
    include "./header.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
?>

<div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4 fondoEliminar">
                    <div class="card-body">
                        <a href="index.php" class="btn btn-outline-danger">
                            <i class="fa-solid fa-arrow-left"></i> Regresar
                        </a>
                        <h2>Eliminar registro</h2>

                        <table class="table table-bordered">
                            <thead>
                                <th>Apellido paterno</th>
                                <th>Apellido materno</th>
                                <th>Nombre</th>
                                <th>Fecha de nacimiento</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <?php echo $datos->paterno; ?> </td>
                                    <td> <?php echo $datos->materno; ?> </td>
                                    <td> <?php echo $datos->nombre; ?> </td>
                                    <td> <?php echo $datos->fecha_nacimiento; ?> </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="alert alert-danger" role="alert">
                            <p>¿Está seguro de eliminar este registro?</p>
                            <p>Una vez eliminado no podrá ser recuperado!</p>
                        </div>
                        <form action="./procesos/eliminar.php" method="POST">
                            <input type="text" name="id" value="<?php echo $datos->_id; ?>" hidden>
                            <button class="btn btn-danger">
                                <i class="fa-solid fa-user-xmark"></i> Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "./scripts.php"; ?>