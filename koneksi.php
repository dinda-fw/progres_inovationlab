<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "web_database"; 

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
