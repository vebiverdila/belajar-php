<?php

$con = mysqli_connect("localhost","root","","fakultas");


if (mysqli_connect_errno()) {
    echo "Koneksi gagal". mysqli_connect_errno();
}else{
    echo "Koneksi berhasil";
}

// 3. membaca data
$query = "SELECT * FROM mahasiswa";

// 4.menampilkan data
$result = mysqli_query($con,$query);
$mahasiswa= [] ;
if ($result){
    // tampilkan data satu persatu
    while($row = mysqli_fetch_assoc($result)) {
        $mahasiswa[]= $row;
    }
    mysqli_free_result($result);
}

// 5. Tutup mysql
mysqli_close($con);

foreach($mahasiswa as $values) {
    echo $values ["nama"];

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border ="1" style="width:100%;">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
        </tr>
        <?php foreach($mahasiswa as $values): ?>
        <tr>
            <td><?php echo $values["nim"] ?></td>
            <td><?php echo $values["nama"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>



    
</body>
</html>