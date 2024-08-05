<?php
require_once("nexo.php");

if (isset($_GET['id'])) {
    $controller = new controladorEmployees();
    $controller->eliminarEmpleado($_GET['id']);
} else {
    header("Location: list.php");
    exit();
}
?>
