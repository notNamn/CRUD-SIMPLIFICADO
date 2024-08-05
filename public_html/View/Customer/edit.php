<?php
require_once("nexo.php");

$controller = new controladorCustomer();
$customer = $controller->show($_GET['id']);
?>
<?php
require_once("nexo.php");

$controller = new controladorCustomer();
$customer = $controller->show($_GET['id']);
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
        <h1 class="mb-4">Editar Cliente</h1>
        <?php if ($customer): ?>
            <form action="update.php?id=<?php echo $customer['CustomerID']; ?>" method="post" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="CustomerName" class="form-label">Nombre:</label>
                    <input type="text" name="CustomerName" id="CustomerName" class="form-control" value="<?php echo $customer['CustomerName']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce el nombre del cliente.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="ContactName" class="form-label">Contacto:</label>
                    <input type="text" name="ContactName" id="ContactName" class="form-control" value="<?php echo $customer['ContactName']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce el nombre del contacto.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Address" class="form-label">Dirección:</label>
                    <input type="text" name="Address" id="Address" class="form-control" value="<?php echo $customer['Address']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce la dirección.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="City" class="form-label">Ciudad:</label>
                    <input type="text" name="City" id="City" class="form-control" value="<?php echo $customer['City']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce la ciudad.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="PostalCode" class="form-label">Código Postal:</label>
                    <input type="text" name="PostalCode" id="PostalCode" class="form-control" value="<?php echo $customer['PostalCode']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce el código postal.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Country" class="form-label">País:</label>
                    <input type="text" name="Country" id="Country" class="form-control" value="<?php echo $customer['Country']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce el país.
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
