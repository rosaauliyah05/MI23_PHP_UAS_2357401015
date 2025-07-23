<?php
session_start();
include 'config/koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($data) > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
            padding: 50px;
        }
        .login-box {
            width: 300px;
            background: white;
            padding: 30px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
        }
        .login-box h2 {
            text-align: center;
        }
        input {
            width: 100%;
            margin: 10px 0;
            padding: 8px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #333;
            color: white;
            border: none;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <?php if (isset($error)) echo "<div class='error'>$error</div>"; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>

    <p style="text-align:center; margin-top:30px; font-size:14px; color:#777;">
        Rosa Auliyah – 2357401015 – MI23
    </p>
</body>
</html>