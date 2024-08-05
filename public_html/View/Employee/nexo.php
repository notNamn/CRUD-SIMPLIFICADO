<?php 

    $ruta = "../../Core/controller.php";


    if (file_exists($ruta)) {
        require_once $ruta;
    } else {
        echo "Archivo no encontrado.";
    }
?>