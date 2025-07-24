<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if ($user === "admin" && $pass === "1234") {
        echo "Welcome, admin!";
    } else {
        echo "Invalid credentials!";
    }
} else {
    echo "Access Denied";
}
?>
