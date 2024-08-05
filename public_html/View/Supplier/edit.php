
<?php
require_once("nexo.php");

$controller = new controladorSuppliers();
$supplier = $controller->verProveedor($_GET['id']);
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
    <!-- SupplierName, ContactName, Address, City, PostalCode, Country, Phone-->
<body class="bg-light">
    <div class="container">
        <h1 class="mb-4">Editar Empleado</h1>
        <?php if ($supplier): ?>
            <form action="update.php?id=<?php echo $supplier['SupplierID']; ?>" method="post" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="SupplierName" class="form-label">SupplierName:</label>
                    <input type="text" name="SupplierName" id="SupplierName" class="form-control" value="<?php echo $supplier['SupplierName']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce el nombre del Empleado.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="ContactName" class="form-label">ContactName:</label>
                    <input type="text" name="ContactName" id="ContactName" class="form-control" value="<?php echo $supplier['ContactName']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce el apellido del Empleado.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Address" class="form-label">Address:</label>
                    <input type="text" name="Address" id="Address" class="form-control" value="<?php echo $supplier['Address']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce la fecha de cumpleaños.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="City" class="form-label">City:</label>
                    <input type="text" name="City" id="City" class="form-control" value="<?php echo $supplier['City']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce la City.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="PostalCode" class="form-label">PostalCode:</label>
                    <input type="text" name="PostalCode" id="PostalCode" class="form-control" value="<?php echo $supplier['PostalCode']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce el codigo postal.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Country" class="form-label">Country:</label>
                    <input type="text" name="Country" id="Country" class="form-control" value="<?php echo $supplier['Country']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce el Pais.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Phone" class="form-label">Phone:</label>
                    <input type="text" name="Phone" id="Phone" class="form-control" value="<?php echo $supplier['Phone']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce el numero telefonico.
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
