<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: ../login.php");
    exit;
}
include '../config/koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff;
            padding: 40px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            text-align: left;
        }
        th, td {
            padding: 10px;
            border: 1px solid #aaa;
        }
        th {
            background-color: #eee;
        }
        .aksi a {
            text-decoration: none;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
        }
        .tambah {
            display: block;
            width: 150px;
            margin: 20px auto;
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 6px;
        }
        .tambah:hover {
            background-color: #555;
        }
        .hapus {
            background-color: #dc3545;
        }
        .hapus:hover {
            background-color: #c82333;
        }
        .kembali {
            display: block;
            width: 200px;
            margin: 30px auto 0;
            text-align: center;
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 6px;
        }
        .kembali:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Data Kategori</h2>

    <a class="tambah" href="tambah.php">+ Tambah Kategori</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td class="aksi">
                <a class="hapus" href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <a class="kembali" href="../dashboard.php">← Kembali ke Dashboard</a>

    <p style="text-align:center; margin-top:30px; font-size:14px; color:#777;">
        Rosa Auliyah – 2357401015 – MI23
    </p>
</body>
</html>