<?php
require_once("nexo.php");

$controller = new controladorEmployees();
$controller->actualizarEmpledo($_GET['id'], $_POST['LastName'], $_POST['FirstName'], $_POST['BirthDate'], $_POST['Photo'], $_POST['Notes']);
?>
