
<?php
require_once("nexo.php");

$controller = new controladorCategories();
$categorie = $controller->verCategories($_GET['id']);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Categoria</title>
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
        <h1 class="mb-4">Editar Categoria</h1>
        <?php if ($categorie): ?>
            <form action="update.php?id=<?php echo $categorie['CategoryID']; ?>" method="post" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="CategoryName" class="form-label">CategoryName:</label>
                    <input type="text" name="CategoryName" id="CategoryName" class="form-control" value="<?php echo $categorie['CategoryName']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce el nombre de la categoria.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="Description" class="form-label">Description:</label>
                    <input type="text" name="Description" id="Description" class="form-control" value="<?php echo $categorie['Description']; ?>" required>
                    <div class="invalid-feedback">
                        Por favor, introduce la descripcion.
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
