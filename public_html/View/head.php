<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php
            echo (empty($_GET['id']))
                ? ((strpos($_SERVER['REQUEST_URI'], 'create')) ? "Agregando nuevo usuario" : "Index")
                : ((strpos($_SERVER['REQUEST_URI'], 'show')) ? "Detalles del registro " . $_GET['id'] : "Actualizar registro " . $_GET['id']);
            ?></title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .container {
            width: 100%;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding-top: 10px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 30px;
            margin-bottom: 10px;
        }

        .logo h1 {
            padding-left: 30px;
            margin: 0;
            font-size: 24px;
        }

        nav {
            flex-grow: 1;
            text-align: right;
        }

        .horizontal-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .horizontal-menu li {
            display: inline-block;
        }

        .horizontal-menu li a {
            text-decoration: none;
            color: #ecf0f1;
            padding: 40px 30px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .horizontal-menu li a:hover {
            background-color: #34495e;
        }
    </style>

<body>

    <header>
        <div class="logo">
            <h1> <a href="../inicio.php" style="text-decoration: none; color: #ffffff; ">INICIO</a></h1>
        </div>

        <nav>
            <ul class="horizontal-menu">
                <li><a href="../Customer/list.php">Customers</a></li>
                <li><a href="../Employee/list.php">Employees</a></li>
                <li><a href="../Supplier/list.php">Suppliers</a></li>
                <li><a href="../Categorie/list.php">Categories</a></li>
                <li><a href="../inicio.php">Exit</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">