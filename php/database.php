<?php
$host = "localhost";
$username = "user1";
$password = 'pawdo4usr1';
$db_name = "edu_site_db";

$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) { // if no error then error number = 0
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully.";
}

$conn->query("DROP DATABASE edu_site_db");
$sql = "CREATE DATABASE edu_site_db";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully.";
} else {
    echo "Error creating database: " . $conn->error;
}

mysqli_select_db($conn, $db_name);

// κώδικας sql για τη δημιουργία πίνακα
$sql1 = "CREATE TABLE User (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    password_ VARCHAR(50),
    role_ VARCHAR(10)
    )";

if ($conn->query($sql1) === TRUE) {
    echo "Table User created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$GLOBALS["loggedIn"] = TRUE;
$conn->close();

return $conn;
?>