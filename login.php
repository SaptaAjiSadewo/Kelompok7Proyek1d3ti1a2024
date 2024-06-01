<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Account Lawasan Vespa</title>
    <link rel="stylesheet" href="style.css"> <!-- Menghubungkan file CSS -->
</head>
<body>
    <div class="login-container">
        <h2>Login Account</h2>
        <?php
        // Proses login
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validasi sederhana, sesuaikan dengan validasi Anda sendiri
            if ($username == 'username' && $password == 'password') {
                // Set cookie jika remember me dicentang
                if (isset($_POST['remember'])) {
                    setcookie('username', $username, time() + (86400 * 30), "/"); // 30 hari
                    setcookie('password', $password, time() + (86400 * 30), "/"); // 30 hari
                }
                echo '<div class="alert alert-success">Login berhasil!!!</div>';
            } else {
                echo '<div class="alert alert-danger">username atau password salah</div>';
            }
        }
        ?>
        <form method="login-form" action="#" method="POST">
            <input type="text" name="username" placeholder="Username" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>" required>
            <input type="password" name="password" placeholder="Password" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>" required>
            <input type="submit" value="Login">
            <input type="checkbox" class="form-check-input" name="remember" id="remember" <?php if (isset($_COOKIE['username'])) { echo "checked"; } ?>>
                                <label class="form-check-label" for="remember">Remember me</label>
            <br>
            <br>
            <center>
            <a>Belum punya akun?</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="Bagianregister.php">DAFTAR AKUN</a>
            <br>
            <br>
            <a>Akun anda sudah terdaftar?</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="melihatdata.php">CHECK AKUN</a>
            </center>
        </form>
    </div>
    <script src="script.js"></script> <!-- Menghubungkan file JavaScript -->
</body>
</html>
