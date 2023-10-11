<?php

if (empty($_POST["email"])) {
    die("Email is required");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

$conn = require __DIR__ . "/database.php";

print_r($_POST);

require __DIR__ ."/index.php";

?>