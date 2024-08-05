<?php
require_once("nexo.php");

$controller = new controladorCategories();
$controller->actualizarCategories($_GET['CategoryID'], $_POST['CategoryName'], $_POST['Description']);
?>
