<?php
require_once ("Core/conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $security_word = $_POST['security_word'];
    $new_password = $_POST['new_password'];

    changePassword($username, $security_word, $new_password);
}

function changePassword($username, $security_word, $new_password) {
    $conn = new Conexion();
    $db = $conn->conection();

    $query = $db->prepare("SELECT id, security_word FROM users WHERE username = ?");
    $query->execute([$username]);
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($security_word, $user['security_word'])) {
            $new_password_hashed = password_hash($new_password, PASSWORD_BCRYPT);
            $updateQuery = $db->prepare("UPDATE users SET password = ? WHERE id = ?");
            if ($updateQuery->execute([$new_password_hashed, $user['id']])) {
                echo "Password changed successfully.";
            } else {
                echo "Error: " . $updateQuery->errorInfo()[2];
            }
        } else {
            echo "Invalid security word.";
        }
    } else {
        echo "No user found with that username.";
    }
}
?>
