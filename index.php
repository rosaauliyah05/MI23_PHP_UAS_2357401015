<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #dfe6e9, #b2bec3);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            color: #2d3436;
        }
        a {
            text-decoration: none;
            background-color: #0984e3;
            color: white;
            padding: 10px 25px;
            border-radius: 8px;
            display: inline-block;
            margin-top: 20px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #74b9ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Sistem UAS PHP</h1>
        <p>Silakan login untuk melanjutkan.</p>
        <a href="login.php">Login Sekarang</a>
    </div>
</body>
</html>