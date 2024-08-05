<?php
require_once("nexo.php");

if (isset($_GET['id'])) {
    $controller = new controladorCategories();
    $controller->eliminarCategoria($_GET['id']);
} else {
    header("Location: list.php");
    exit();
}
?>
