<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}
include '../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    mysqli_query($conn, "INSERT INTO kategori (nama) VALUES ('$nama')");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            padding: 40px;
        }
        .form-box {
            width: 400px;
            margin: auto;
            background: #f8f8f8;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
        }
        input[type="text"], button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
        }
        button {
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #555;
        }
        .kembali {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
        .kembali:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <h2>Tambah Kategori</h2>
        <form method="POST">
            <input type="text" name="nama" placeholder="Nama Kategori" required>
            <button type="submit" name="simpan">Simpan</button>
        </form>
        <a class="kembali" href="index.php">← Kembali</a>
    </div>

    <p style="text-align:center; margin-top:30px; font-size:14px; color:#777;">
        Rosa Auliyah – 2357401015 – MI23
    </p>
</body>
</html>