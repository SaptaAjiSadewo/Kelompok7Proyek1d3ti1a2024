<?php
include 'functions.php';
$query = "select * from akunpembeli";
$result = mysqli_query($conn, $query);

mysqli_query($conn, "SELECT * FROM akunpembeli");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .mx-auto {
            width: 1200px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">


            <!-- untuk mengeluarkan data -->
            <div class="card ">
                <div class="card-header text-white bg-secondary d-flex justify-content-center">
                    DATA PELANGGAN LAWASAN VESPA
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">USERNAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">PASSWORD</th>
                                <th scope="col">TELEPHONE</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">AKSI</th>
                               
                              <?php $nomor = 1; ?>
                              <?php while ($data = mysqli_fetch_assoc($result)) : ?>    
                            </tr>
                        </thead>
                        <tbody> 
                                    <tr>
                                        <td><?php echo $nomor++; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td><?php echo $data['password']; ?></td>                               
                                        <td><?php echo $data['telephone']; ?></td>
                                        <td><?php echo $data['alamat']; ?></td>
                                        <td><a href="hapus.php?id=<?=$nomor;?>"><i class="bi bi-trash color-danger" ></i></a></td>
                                    </tr>
                                <?php $nomor++; ?>
                                <?php endwhile; ?>
                                </tr>
                            <?php mysqli_free_result($result); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>