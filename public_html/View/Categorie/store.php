<?php
require_once("nexo.php");

$controller = new controladorCategories();
$controller->guardarCategoria($_POST['CategoryName'], $_POST['Description']);
?>
