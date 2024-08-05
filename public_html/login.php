<?php
require_once ("Core/conexion.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    login($username, $password);
}

function login($username, $password) {
    $conn = new Conexion();
    $db = $conn->conection();

    $query = $db->prepare("SELECT password FROM users WHERE username = ?");
    $query->execute([$username]);
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;  // Almacenar el nombre de usuario en la sesión
            header("Location: View/inicio.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }
}
?>
