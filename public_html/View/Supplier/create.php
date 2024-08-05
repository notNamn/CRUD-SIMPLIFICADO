

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            padding: 50px;
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h1 {
            margin-bottom: 20px;
        }
        .btn-cancel {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Agregar Proveedor</h1>
    <!-- SupplierName, ContactName, Address, City, PostalCode, Country, Phone -->
        <form action="store.php" method="post" class="needs-validation" novalidate>

            <div class="mb-3">
                <label class="form-label" for="SupplierName">SupplierName:</label>
                <input class="form-control" type="text" name="SupplierName" id="SupplierName" required>
                <div class="invalid-feedback">
                    Por favor, introduce el nombre del Proveedor.
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="ContactName">ContactName:</label>
                <input class="form-control" type="text" name="ContactName" id="ContactName" required>
                <div class="invalid-feedback">
                    Por favor, introduce el apellido del empleado.
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="Address">Address:</label>
                <input class="form-control" type="text" name="Address" id="Address" required>
                <div class="invalid-feedback">
                    Por favor, introduce la fecha de compleaños.
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="City">City:</label>
                <input class="form-control" type="text" name="City" id="City" required>
                <div class="invalid-feedback">
                    Por favor, introduce la la City.
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="PostalCode">PostalCode:</label>
                <input class="form-control" type="number" name="PostalCode" id="PostalCode" required>
                <div class="invalid-feedback">
                    Por favor, introduce alguna nota .
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="Country">Country:</label>
                <input class="form-control" type="text" name="Country" id="Country" required>
                <div class="invalid-feedback">
                    Por favor, introduce alguna nota .
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="Phone">Phone:</label>
                <input class="form-control" type="number" name="Phone" id="Phone" required>
                <div class="invalid-feedback">
                    Por favor, introduce alguna nota .
                </div>
            </div>
            <div class="d-flex">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a href="list.php" class="btn btn-secondary btn-cancel">Cancelar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFynHuxK9MOSB9F27Hcqke0iYcF6h94MEYz3wE5eN6fQqu9LMVRDdH0h2" crossorigin="anonymous"></script>
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
