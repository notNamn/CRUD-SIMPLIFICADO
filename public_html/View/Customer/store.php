<?php
require_once("nexo.php");

$controller = new controladorCustomer();
$controller->guardar($_POST['CustomerName'], $_POST['ContactName'], $_POST['Address'], $_POST['City'], $_POST['PostalCode'], $_POST['Country']);
?>
