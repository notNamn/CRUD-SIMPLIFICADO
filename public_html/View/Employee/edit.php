
<?php
require_once("nexo.php");

$controller = new controladorEmployees();
$employee = $controller->verEmpleado($_GET['id']);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px;
            max-width: 600px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-actions {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="mb-4">Editar Empleado</h1>
        <?php if ($employee): ?>
            <form action="update.php?id=<?php echo $employee['EmployeeID']; ?>" method="post" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="LastName" class="form-label">LastName:</label>
                    <input type="text" name="LastName" id="LastName" class="form-control" value="<?php echo $employee['LastName']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce el nombre del Empleado.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="FirstName" class="form-label">FirstName:</label>
                    <input type="text" name="FirstName" id="FirstName" class="form-control" value="<?php echo $employee['FirstName']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce el apellido del Empleado.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="BirthDate" class="form-label">BirthDate:</label>
                    <input type="date" name="BirthDate" id="BirthDate" class="form-control" value="<?php echo $employee['BirthDate']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce la fecha de cumpleaños.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Photo" class="form-label">Photo:</label>
                    <input type="text" name="Photo" id="Photo" class="form-control" value="<?php echo $employee['Photo']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce la Photo.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Notes" class="form-label">Notes:</label>
                    <input type="text" name="Notes" id="Notes" class="form-control" value="<?php echo $employee['Notes']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce alguna nota.
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="list.php" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                Cliente no encontrado.
            </div>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+N6uU8A4wPtbP12poKnjhBTL5qltc" crossorigin="anonymous"></script>
    <script>
        // Bootstrap validation
        (function () {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>
