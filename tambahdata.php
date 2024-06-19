<?php
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //ambil data dari tiap elemen pada form
    $email = htmlspecialchars($_POST["email"]);
    $username = $_POST["username"];
    $password = htmlspecialchars($_POST["password"]);
    $konfirmasi_password = htmlspecialchars($_POST["konfirmasi_password"]);
    $telephone = $_POST["telephone"];
    $alamat = $_POST["alamat"];

    //query insert data
    $query = "INSERT INTO akunpembeli VALUES ('','$email','$username','$password','$konfirmasi_password','$telephone','$alamat')";
    mysqli_query($conn, $query);

    //cek apakah data berhasil ditambahkan atau tidak
    // sebuah fungsi yg ngasih tau ada berapa baris yg berubah
    if (mysqli_affected_rows($conn) > 0) {

        echo " <script> alert('data berhasil ditambahkan'); document.location.href = 'melihatdata.php' </script> ";
    } else {
        echo "<script> alert('data gagal ditambahkan'); document.location.href = 'melihatdata.php' </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=fp, initial-scale=1.0">
    <title>Tambah data akun</title>
    <link rel="stylesheet" href="css/bagianhira.css">

    <div class="topnav">
        <center><img src="gambar/lawasan.png" alt="Logo Vespa" width="50px"></center>
        <a href="">login</a>
    </div>

    <body>
        <div class="bodycard">
            <br>
            <br>
            <h2>Register Akun </h2>
            <form action="" method="POST">
                <input type="email" placeholder="masukkan email" name="email" required> <br>
                <input type="text" placeholder="masukkan username" name="username"> <br>
                <input type="password" placeholder="masukkan password" name="password" required> <br>
                <input type="password" placeholder="tolong samakan dengan password diatas" name="konfirmasi_password" required> <br>
                <input type="tel" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" placeholder="contoh 08XX-XXXX-XXXX" name="telephone"> <br>
                <input type="text" placeholder="contoh jln." name="alamat"> <br> <br>
                <button type="submit" name="submit"> Menambahkan </button>
            </form>
            <br>
        </div>
    </body>
    <footer>Copy Right 2024</footer>

</html>