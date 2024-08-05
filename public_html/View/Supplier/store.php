<?php
require_once("nexo.php");

$controller = new controladorSuppliers();
$controller->guardarProveedor($_POST['SupplierName'], $_POST['ContactName'], $_POST['Address'], $_POST['City'], $_POST['PostalCode'], $_POST['Country'], $_POST['Phone']);
?>
