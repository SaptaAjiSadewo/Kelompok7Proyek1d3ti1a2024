<?php 

require 'functions.php';

$akunpembeli = query("SELECT * FROM akunpembeli");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                                
                            </tr>
                        </thead>
                        <tbody>
                             <?php $nomor = 1; ?>
                             <?php foreach($akunpembeli as $row) : ?>
                                    <tr>
                                        <td><?php echo $nomor; ?> </td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['password']; ?></td>                               
                                        <td><?php echo $row['telephone']; ?></td>
                                        <td><?php echo $row['alamat']; ?></td>
                                        <td class><a class="btn btn-danger m-2" href="hapus.php?id=<?=$row['id_pembeli']; ?>" ><i class="bi bi-trash" onclick="return confirm('yakin');"></i></a>
                                            <a class="btn btn-primary" href=""><i class="bi bi-box-arrow-up"></i></a>
                                        </td>
                                    </tr>
                                    <?php $nomor++;?>    
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>
</body>
</html>