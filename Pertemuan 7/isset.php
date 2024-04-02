<?php
// Soal 1.1
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
    echo "<br>";
}

// Soal 1.2
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo " nama: " . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array";
}
?>