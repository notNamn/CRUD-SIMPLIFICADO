<?php
require_once("nexo.php");

if (isset($_GET['id'])) {
    $controller = new controladorSuppliers();
    $controller->eliminarProveedor($_GET['id']);
} else {
    header("Location: list.php");
    exit();
}
?>
