<?php
$host = "localhost";
$user = "root";
$pass = ""; // No password in XAMPP by default
$db   = "user_auth";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
