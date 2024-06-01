<?php

include "mengoneksikan.php";

if (count($_POST) > 0)

{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $konfirmasi_password = $_POST['konfirmasi_password'];
        $telephone = $_POST['telephone'];
        $alamat = $_POST['alamat'];

    $query = "INSERT INTO akun_pembeli (username, email, password, konfirmasi_password, telephone, alamat) VALUES ('$username', '$email', '$password','$konfirmasi_password', '$telephone', '$alamat')";

    if (mysqli_query($db_connect, $query)) {

        echo "data berhasil ditambahkan";

    } else {   

    echo "data berhasil ditambahkan";    

    }

}

?>



<!-- menunjukkan jenis dokumen dan versinya -->
<!DOCTYPE html>
<!--  elemen root dari halaman web -->
<html>
<!--  informasi tentang dokumen, seperti judul halaman dan tautan ke file eksternal seperti stylesheet -->
<head>
    <!--  judul dari halaman web -->
    <title>Suku Cadang Lawasan Vespa</title>
    <!-- menghubungkan sebuah stylesheet eksternal -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="stylesbagianhira.css" rel="stylesheet">
</head>
<!-- bagian utama dari halaman web yang berisi konten yang akan ditampilkan kepada pengguna -->
<body>
    <!-- bagian dari halaman web yang berisi tautan menu -->
    <header>
        <!-- tautan untuk ke menu login -->
        <a href="Login.html"><b>Login</b></a>
        <center>
        <img src="Lawasan.jpg" width="20%" height="20%"  alt="Logo Vespa">
        <center>
    </header>
    <!-- elemen horizontal rule yang digunakan untuk membuat garis pemisah visual antara elemen-elemen -->
    <hr>
    <!-- formulir HTML yang digunakan untuk mengumpulkan informasi dari pengguna. Formulir ini memiliki metode post, yang akan mengirim data ke home.html setelah di submit -->
    <form action="" method="post">
        <!-- judul formulir registrasi yang ditampilkan di tengah halaman -->
        <h1 align="center">Register Form</h1>
        <!-- elemen tabel yang digunakan untuk menyusun elemen-elemen formulir ke dalam bentuk tabel -->
        <table align="center">
            <!-- sel dalam tabel yang berisi label "Username". Tag <b> digunakan untuk membuat teks menjadi tebal -->
            <td><p><b>Username</b></p></td>
            <!--  baris dalam tabel -->
            <tr>
                <!-- sel dalam tabel yang berisi input teks untuk pengguna memasukkan username. Atribut type="text" menunjukkan bahwa ini adalah bidang input teks. Atribut placeholder memberikan petunjuk kepada pengguna tentang apa yang harus dimasukkan ke dalam bidang input -->
                <td><input type="text" id="username" name="username" placeholder="Masukan Nama"></td>
            </tr>
            </tr>
            </tr>
            <!-- sebuah sel dalam tabel yang berisi label "Email". Tag <b> digunakan untuk membuat teks menjadi tebal -->
            <td><p><b>Email</b></p></td>
            <tr>
                <!-- sebuah sel dalam tabel yang berisi input teks untuk pengguna memasukkan alamat email. Atribut type="text" menunjukkan bahwa ini adalah bidang input teks. Atribut placeholder memberikan petunjuk kepada pengguna tentang apa yang harus dimasukkan ke dalam bidang input -->
                <td><input type="text" id="email" name="email" placeholder="Alamat Email"></td>
            </tr>
            <!-- sebuah sel dalam tabel yang berisi label "Password" -->
            <td><p><b>Password</b></p></td>
            <tr>
                <!-- sebuah sel dalam tabel yang berisi input password untuk pengguna memasukkan password. Atribut type="password" digunakan agar karakter-karakter yang dimasukkan ke dalam bidang input tidak terlihat secara jelas (diubah menjadi tanda bintang atau titik). Atribut placeholder memberikan petunjuk kepada pengguna tentang apa yang harus dimasukkan ke dalam bidang input -->
                <td><input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password" required></td>
            </tr>
            <!-- sebuah sel dalam tabel yang berisi label "Konfirmasi Password" -->
            <td><p><b>Konfirmasi Password</b></p></td>
            <tr>
                <td><input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" placeholder="Konfirmasi Password" required></td>
            </tr>
            <tr>
                <td><p><b>telephone</b></p></td>
                <!--  baris dalam tabel -->
                <tr>
                    <td><input type="tel" id="telephone" name="telephone"  placeholder="Masukan telepon"></td>
                </tr>
                </tr>
                </tr>
                <td><p><b>alamat </b></p></td>
                <!--  baris dalam tabel -->
                <tr>
                    <td><textarea id="alamat" name="alamat" rows="5" cols="30"></textarea></td>
                </tr>
                </tr>
                </tr>
                <!--sebuah sel dalam tabel yang berisi tombol "Kirim". Ketika tombol ini ditekan, formulir akan dikirimkan (menggunakan metode POST karena telah ditentukan dalam tag form) ke halaman yang ditentukan di atribut action dalam tag form  -->
                <td><input type="submit" value="Kirim"></td>
            </tr>
        </table>
    </form>
    <hr>
    <!-- bagian bawah halaman web yang berisi informasi tambahan, dalam hal ini, mungkin sebuah tanda tangan atau identifikasi penulis halaman web -->
    <footer>Copy Right 2024</footer>
</body>
</html>