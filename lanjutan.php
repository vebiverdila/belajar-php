<?php

// $nama = "Michael Klemens";

/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
*/

// Perulangan
/*
$no = 100;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
}
*/

/*
$no = 10;
$i = 0;
while ($i < $no) {
     $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;
do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/
 /*
$data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');
$i = 0;
while ($i < count($data)) {
    echo $data[$i]."<br>";
    $i++;
}
*/
// echo $data[5];

/*
foreach($data as $value) {
    echo $value."<br>";
}
*/

// PERCABANGAN
/*
if ($nama == "Michael Klemens") {
    echo $nama." adalah orang Samarinda";
} else if($nama == "Vebi") {
    echo $nama." berasal dari Tana Tidung";
} else {
    echo $nama." darimana ya?";
}
*/
/*
switch($nama) {
    case "Michael Klemens":
        $pesan = $nama." adalah orang Samarinda";
    break;
    case "Vebi":
        $pesan = $nama." berasal dari Tana Tidung";
    break;
    default:
        $pesan = $nama." darimana ya?";
}
echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Belajar</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Michael Klemens":
                    $pesan = $_POST['nama']." adalah orang Samarinda";
                break;
                case "Vebi":
                    $pesan = $_POST['nama']." berasal dari Tana Tidung";
                break;
                default:
                    $pesan = $_POST['nama']." darimana ya?";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Anda belum input nama dan jumlah.";
        }
    ?>
</body>
</html>