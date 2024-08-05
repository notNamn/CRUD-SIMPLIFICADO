<?php
require_once("nexo.php");

$controller = new controladorSuppliers();
$supplier = $controller->verProveedor($_GET['id']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Cliente</title>
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
        <h1 class="mb-4">Detalle del Proveedor</h1>
        <?php if ($supplier): ?>
            <div class="card">
                <div class="card-body">
                    <!-- SupplierName, ContactName, Address, City, PostalCode, Country, Phone -->
                    <h5 class="card-title">SupplierID: <?php echo $supplier['SupplierID']; ?></h5>
                    <p class="card-text"><strong>SupplierName:</strong> <?php echo $supplier['SupplierName']; ?></p>
                    <p class="card-text"><strong>ContactName:</strong> <?php echo $supplier['ContactName']; ?></p>
                    <p class="card-text"><strong>Address:</strong> <?php echo $supplier['Address']; ?></p>
                    <p class="card-text"><strong>City:</strong> <?php echo $supplier['City']; ?></p>
                    <p class="card-text"><strong>PostalCode: </strong> <?php echo $supplier['PostalCode']; ?></p>
                    <p class="card-text"><strong>Country: </strong> <?php echo $supplier['Country']; ?></p>
                    <p class="card-text"><strong>Phone: </strong> <?php echo $supplier['Phone']; ?></p>
                    <div class="btn-actions">
                        <a class="btn btn-success" href="edit.php?id=<?php echo $supplier['SupplierID']; ?>">Editar</a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $supplier['SupplierID']; ?>" onclick="return confirm('¿Estás seguro de eliminar este cliente?');">Eliminar</a>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                Empleado no encontrado.
            </div>
        <?php endif; ?>
        <div class="back-link">
            <a href="list.php" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+N6uU8A4wPtbP12poKnjhBTL5qltc" crossorigin="anonymous"></script>
</body>
</html>
