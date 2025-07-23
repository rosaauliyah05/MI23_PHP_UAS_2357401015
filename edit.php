<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}
include '../config/koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id'");
$produk = mysqli_fetch_assoc($data);
$kategori = mysqli_query($conn, "SELECT * FROM kategori");

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $kategori_id = $_POST['kategori_id'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($conn, "UPDATE produk SET 
        nama='$nama',
        kategori_id='$kategori_id',
        harga='$harga',
        deskripsi='$deskripsi'
        WHERE id='$id'
    ");

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
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
        input, select, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
        }
        textarea {
            resize: none;
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
        <h2>Edit Produk</h2>
        <form method="POST">
            <input type="text" name="nama" value="<?= $produk['nama']; ?>" required>
            <select name="kategori_id" required>
                <?php while ($k = mysqli_fetch_assoc($kategori)) { ?>
                    <option value="<?= $k['id']; ?>" <?= $k['id'] == $produk['kategori_id'] ? 'selected' : ''; ?>>
                        <?= $k['nama']; ?>
                    </option>
                <?php } ?>
            </select>
            <input type="number" name="harga" value="<?= $produk['harga']; ?>" required>
            <textarea name="deskripsi" rows="3" required><?= $produk['deskripsi']; ?></textarea>
            <button type="submit" name="update">Update</button>
        </form>
        <a class="kembali" href="index.php">← Kembali</a>
    </div>

    <p style="text-align:center; margin-top:30px; font-size:14px; color:#777;">
        Rosa Auliyah – 2357401015 – MI23
    </p>
</body>
</html>