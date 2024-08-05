<?php
require_once("nexo.php");

$controller = new controladorCategories();
$categorie = $controller->verCategories($_GET['id']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de la categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px;
            max-width: 800px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-actions {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }
        .back-link {
            margin-top: 20px;
        }
        body {
            background-color: #f8f9fa;
        }
        .card-title {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Detalle de la categoria</h1>
        <?php if ($categorie): ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">CategoryID: <?php echo $categorie['CategoryID']; ?></h5>
                    <p class="card-text"><strong>CategoryName:</strong> <?php echo $categorie['CategoryName']; ?></p>
                    <p class="card-text"><strong>Description:</strong> <?php echo $categorie['Description']; ?></p>
                    <div class="btn-actions">
                        <a class="btn btn-success" href="edit.php?id=<?php echo $categorie['CategoryID']; ?>">Editar</a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $categorie['CategoryID']; ?>" onclick="return confirm('¿Estás seguro de eliminar este cliente?');">Eliminar</a>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                Categoria no encontrada.
            </div>
        <?php endif; ?>
        <div class="back-link">
            <a href="list.php" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+N6uU8A4wPtbP12poKnjhBTL5qltc" crossorigin="anonymous"></script>
</body>
</html>
