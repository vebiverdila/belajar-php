<?php

if (isset($_POST["submit"])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $id_jurusan = $_POST['id_jurusan'];
    $tpt_lahir = $_POST['tpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

    $con = mysqli_connect("localhost","root","","fakultas");


    if (mysqli_connect_errno()) {
        echo "Koneksi gagal". mysqli_connect_errno();
    }else{
        echo "Koneksi berhasil";
    }

    // buat sql query untuk insert ke database
    $sql = "insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
            values ($id_jurusan, '$nim', '$nama', '$gender', '$tpt_lahir', '$tgl_lahir', '$alamat')";
    
    if (mysqli_query($con, $sql)){
        echo "Data baru berhasil ditambahkan";
    }else{
        echo "Ada Error ". mysqli_error();
    }

    mysqli_close($con);
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <form action="insert.php" method="post">
        Nim: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        ID Jurusan: <input type="number" name="id_jurusan"><br>
        Jenis Kelamin: <input type="text" name="gender"><br>
        Tempat Lahir: <input type="text" name="tpt_lahir"><br>
        Tanggal Lahir (yyyy-mm-dd): <input type="text" name="tgl_lahir"><br>
        Alamat: <input type="text" name="alamat"><br>
        <button type="submit" name="submit"> Tambah Data</button>
    </form>
</body>
</html>