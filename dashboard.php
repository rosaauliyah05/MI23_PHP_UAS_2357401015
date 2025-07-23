<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
include 'config/koneksi.php';

// Hitung jumlah data
$jml_kategori = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM kategori"));
$jml_produk   = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM produk"));
$jml_user     = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 40px;
            text-align: center;
        }
        h2 {
            margin-bottom: 30px;
        }
        .box-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }
        .box {
            background-color: white;
            border-radius: 10px;
            padding: 25px 40px;
            width: 220px;
            box-shadow: 0 0 10px #ccc;
        }
        .box h3 {
            font-size: 28px;
            margin: 0;
        }
        .box p {
            color: #777;
            margin-top: 5px;
        }
        .menu {
            margin: 30px 0;
        }
        .menu a {
            display: inline-block;
            margin: 10px 15px;
            text-decoration: none;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
        }
        .menu a:hover {
            background-color: #555;
        }
        .logout {
            margin-top: 40px;
            color: #dc3545;
        }
        .logout:hover {
            text-decoration: underline;
        }
        footer {
            margin-top: 60px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>

    <h2>Selamat datang, <?= $_SESSION['username']; ?>!</h2>

    <div class="box-container">
        <div class="box">
            <h3><?= $jml_kategori; ?></h3>
            <p>Kategori</p>
        </div>
        <div class="box">
            <h3><?= $jml_produk; ?></h3>
            <p>Produk</p>
        </div>
        <div class="box">
            <h3><?= $jml_user; ?></h3>
            <p>Users</p>
        </div>
    </div>

    <div class="menu">
        <a href="kategori/index.php">Kelola Kategori</a>
        <a href="produk/index.php">Kelola Produk</a>
    </div>

    <a class="logout" href="logout.php">Logout</a>

    <footer>
        Rosa Auliyah – 2357401015 – MI23
    </footer>

</body>
</html>