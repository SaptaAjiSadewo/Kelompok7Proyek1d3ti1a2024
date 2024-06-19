  <?php
  $conn = mysqli_connect("localhost", "root", "", "lawasanvespa");

  function query($query)
  {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  }

  function tambah($data)
  {
    global $conn;
    $email = $data["email"];
    $username = $data["username"];
    $password = $data["password"];
    $konfirmasi_password = $data["konfirmasi_password"];
    $telephone = $data["telephone"];
    $alamat = $data["alamat"];


    //query insert data
    $query = "INSERT INTO akunpembeli VALUES 
    ('','$email','$username','$password','$konfirmasi_password','$telephone','$alamat')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }

    function hapus($id)
    {
      global $conn;
      mysqli_query($conn, "DELETE FROM akunpembeli WHERE id_pembeli = $id");
      return mysqli_affected_rows($conn);
    }



  ?>