<?php
require_once ("Core/conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $security_word = $_POST['security_word'];

    registerUser($username, $email, $password, $security_word);
}

function registerUser($username, $email, $password, $security_word) {
    $conn = new Conexion();
    $db = $conn->conection();

    $password_hashed = password_hash($password, PASSWORD_BCRYPT);
    $security_word_hashed = password_hash($security_word, PASSWORD_BCRYPT);

    $query = $db->prepare("INSERT INTO users (username, email, password, security_word) VALUES (?, ?, ?, ?)");
    if ($query->execute([$username, $email, $password_hashed, $security_word_hashed])) {
        echo "User registered successfully.";
    } else {
        echo "Error: " . $query->errorInfo()[2];
    }
}
?>
