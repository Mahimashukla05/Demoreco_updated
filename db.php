
<?php
$host = "	sql201.infinityfree.com";  // from InfinityFree panel
$user = "your_db_user";             // from panel
$pass = "your_db_password";         // from panel
$db   = "your_db_name";             // from panel

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
