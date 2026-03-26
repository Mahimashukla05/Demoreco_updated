<?php
$host = "sql201.infinityfree.com";  // exact copy karo
$user = "if0_41486681";              // exact username
$pass = "McngKTnOKopxbm3";     // jo set kiya tha
$db   = "if0_41486681_demoreco";    // full db name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
