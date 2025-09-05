<?php
$host = "localhost";
$user = "root";   // default in XAMPP
$pass = "";       // keep blank if no MySQL password
$db   = "co_po_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
