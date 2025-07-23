<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "uas_php"; // ← disesuaikan dengan nama database kamu yang sebenarnya

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>