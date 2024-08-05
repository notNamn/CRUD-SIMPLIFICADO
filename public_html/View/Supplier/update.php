<?php
require_once("nexo.php");

$controller = new controladorSuppliers();
//SupplierName, ContactName, Address, City, PostalCode, Country, Phone
$controller->actualizarProveedor($_GET['id'], $_POST['SupplierName'], $_POST['ContactName'], $_POST['Address'], $_POST['City'], $_POST['PostalCode'], $_POST['Country'], $_POST['Phone']);
?>
