<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $conn = require __DIR__ . "/database.php";
/*
        $sql = sprintf("SELECT * FROM user
                WHERE email = '%s'",
                $mysqli->real_escape_string($_POST["email"]));
        
        $result = $mysqli->query($sql);

        $user = $result->fetch_assoc();

        var_dump($user);
*/
        exit;
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Πιστοποίηση</title>
        <link rel="stylesheet" href="../css/login.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div id="login-form-container">
            <form method="post" action="process_login.php" novalidate>
                <div class="form-item">
                    <label for="email">Email:</label><br>
                    <input type="email" name="email"><br>
                </div>
                <div class="form-item">
                    <label>Password:</label><br>
                    <input type="password" name="password"><br>
                </div>
                <button class="form-item" id="login-button" type="submit">Login</button><br>
            </form>
        </div>
    </body>
</html>