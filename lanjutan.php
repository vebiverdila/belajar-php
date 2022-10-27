<?php

$nama ="Vebi";

// PERULANGAN
$no = 10;
$i= 0; 
// for ($i=0;$i<5; $i++) {
//     $n = $i + 1;
//     echo $n." "$nama<br/>";
// }


// while ($i < $no) {
//     $n = $i + 1;
//     echo $n." ".$nama."<br/>";
//     $i++;
// }

// do {
//     $n = $i + 1;
//     echo $n." ".$nama."<br/>";
//     $i++; 
// } while ($i < $no)

// $data= array('Avanza','Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');
// foreach($data as $value) {
//     echo $value."<br>";
// }

// $data= array('Avanza','Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');

// $i= 0;
// while ($i < count($data)) {
//     echo $data[$i]."<br>";
//     $i++;
// }
// for ($i=0; $i<count($data); $i++) {
//     echo $data[$i]."<br>";
// }

// PERCABANGAN
// if ($nama == "Putu") {
//     echo $nama." adalah orang Bali";
// } else if($nama== "Budi") {
//     echo $nama." berasal dari pulau Jawa";
// } else {
//     echo $nama. "dari mana ya?";
// }

switch($nama) {
    case "Putu":
        $pesan = $nama. " adalah orang Bali";
    break;
    case "Budi":
        $pesan = $nama. " adalah orang Jawa";
    break;
    default:
        $pesan =$nama." darimana ya?";
        
}
echo $pesan;
?>