<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud System</title>
    <link rel="stylesheet" href="../style/inicio.css">
    <style>
        .image {
            background-image: url("js/imagenInicio.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .image p {
            font-size: 20px;
            font-weight: bold;
        }
    </style>

</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <h1><a href="#" style="text-decoration: none; color: #ffffff;">INICIO</a></h1>
            </div>

            <nav>
                <ul class="horizontal-menu">
                    <li><a href="Customer/list.php">Customers</a></li>
                    <li><a href="Employee/list.php">Employees</a></li>
                    <li><a href="Supplier/list.php">Suppliers</a></li>
                    <li><a href="Categorie/list.php">Categories</a></li>
                    <li><a href="../index.php">Exit</a></li>
                </ul>
            </nav>
        </header>
        <div class="content-wrapper">
            <aside class="vertical-menu">
                <ul>
                    <li><a class="modal-link" href="Customer/create.php">Add Customer</a></li>
                    <li><a class="modal-link" href="Employee/create.php">Add Employee</a></li>
                    <li><a class="modal-link" href="Supplier/create.php">Add Supplier</a></li>
                    <li><a class="modal-link" href="Categorie/create.php">Add Categorie</a></li>
                </ul>
            </aside>
            <main>
                <div class="image">
                    <p>Bienvenido, <?php echo $username; ?>!</p>
                </div>
            </main>
        </div>
    </div>
</body>

</html>