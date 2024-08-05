<?php
require_once("nexo.php");

$controller = new controladorEmployees();
$controller->guardarEmpleado($_POST['LastName'], $_POST['FirstName'], $_POST['BirthDate'], $_POST['Photo'], $_POST['Notes']);
?>
