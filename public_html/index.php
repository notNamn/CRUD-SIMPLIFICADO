<?php
session_start();  // Iniciar la sesión en el login
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/styleLogin.css">
</head>
<body>

    <!---->
    <div class="outer-container">
        <div class="inner-container">
            <div class="left-panel">
                <div class="content">
                    <img src="image/imagen1.jpg" alt="Rocket" class="rocket-image">
                </div>
            </div>

            <div class="right-panel">
                <h1> Login </h1>

                <form action="login.php" method="post">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" placeholder="Username" required><br><br>

                    <label for="password">contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Password" required><br><br>

                    <input type="submit" value="Login">
                </form>
                
                <p><a href="register.html">Crear una cuenta</a></p>
                <p><a href="change_password.html">Olvidaste contraseña?</a></p>
            </div>
        </div>
    </div>
</body>
</html>
