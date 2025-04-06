<?php
$host = "localhost";
$user = "root"; // Default MySQL user in XAMPP
$pass = ""; // Default is empty in XAMPP
$db = "quizlogin"; // Your database name

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>