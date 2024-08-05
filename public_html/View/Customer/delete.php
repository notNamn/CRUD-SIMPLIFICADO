<?php
require_once("nexo.php");

if (isset($_GET['id'])) {
    $controller = new controladorCustomer();
    $controller->delete($_GET['id']);
} else {
    header("Location: list.php");
    exit();
}
?>
