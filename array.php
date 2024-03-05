<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nialiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ',$nialiLulus);

echo "<br><br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie',9],
    ['David',5],
    ['Eva',6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);

echo "<br><br><br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice',85],
        ['Bob',92],
        ['Charlie',78],
    ],
    'Fisika' => [
        ['Alice',90],
        ['Bob',88],
        ['Charlie',75],
    ],
    'Kimia' => [
        ['Alice',92],
        ['Bob',80],
        ['Charlie',85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br><br><br>";

$mahasiswa = [
    "Alice" => 85,
    "Bob"=> 92,
    "Charlie"=> 78,
    "David"=> 64,
    "Eva"=> 90,
];

$jumlah = 0;
$hitung = 0;
foreach ($mahasiswa as $nama => $nilai) {
    $jumlah += $nilai;
    $hitung++;
}
$rataRata = $jumlah / $hitung;

echo "List Mahasiswa yang nilai matematikanya di atas rata-rata kelas: <br>";
foreach ($mahasiswa as $nama => $nilai) {
    if ($nilai > $rataRata) {
        echo "$nama: $nilai<br>";
    }
}
?>