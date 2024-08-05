<?php
// require_once(__DIR__ . "../../../Core/controller.php");
require_once("nexo.php");
include_once("../head.php");
// include("menu.php");

$controller = new  controladorEmployees();
$employee = $controller->indexarEmpleado();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Customer List</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1> List Employees </h1>
    <a id="openCreateModalBtn" href="create.php" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#createModal" onclick="loadModalContent('create.php', '#createModal .modal-body')" >Agregar Cliente</a>


    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>EmployeeID</th>
                <th>LastName</th>
                <th>FirstName</th>
                <th>BirthDate</th>
                <th>Photo</th>
                <th>Notes</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($employee) : ?>
                <?php foreach ($employee as $employer) : ?>
                    <tr>
                        <td><?php echo $employer['EmployeeID']; ?></td>
                        <td><?php echo $employer['LastName']; ?></td>
                        <td><?php echo $employer['FirstName']; ?></td>
                        <td><?php echo $employer['BirthDate']; ?></td>
                        <td><?php echo $employer['Photo']; ?></td>
                        <td><?php echo $employer['Notes']; ?></td>
                        <td>
                            <a href="show.php" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewModal" onclick="loadModalContent('show.php?id=<?php echo $employer['EmployeeID']; ?>', '#viewModal .modal-body')">Ver</a>
                            <a href="edit.php" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal" onclick="loadModalContent('edit.php?id=<?php echo $employer['EmployeeID']; ?>', '#editModal .modal-body')">Editar</a>
                            <a href="delete.php?id=<?php echo $employer['EmployeeID']; ?>" onclick="return confirm('¿Estás seguro de eliminar este cliente?');" class="btn btn-danger">Eliminar</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="8">No hay empleados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Modal Crear -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Agregar nuevo empleado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Aquí se cargará el contenido del formulario de creación -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar perfil de empleado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Aquí se cargará el contenido del formulario de edición -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ver -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Detalle del empleado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Aquí se cargará el contenido del detalle del cliente -->
                </div>
            </div>
        </div>
    </div>

    <script>
        function loadModalContent(url, modalBodySelector) {
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    document.querySelector(modalBodySelector).innerHTML = data;
                })
                .catch(error => console.error('Error al cargar el contenido del modal:', error));
        }
    </script>

</body>

</html>