<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil tambah: {$hasilTambah} <br>";
echo "Hasil kurang: {$hasilKurang} <br>";
echo "Hasil kali: {$hasilKurang} <br>";
echo "Hasil bagi: {$hasilBagi} <br>";
echo "Sisa bagi: {$sisaBagi} <br>";
echo "Hasil pangkat: {$pangkat} <br><br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil sama: {$hasilSama} <br>";
echo "Hasil tidak sama: {$hasilTidakSama} <br>";
echo "Hasil lebih kecil: {$hasilLebihKecil} <br>";
echo "Hasil lebih besar: {$hasilLebihBesar} <br>";
echo "Hasil lebih kecil sama: {$hasilLebihKecilSama} <br>";
echo "Hasil lebih besar sama: {$hasilLebihBesarSama} <br><br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil and: {$hasilAnd} <br>";
echo "Hasil or: {$hasilOr}<br>";
echo "Hasil Not A: {$hasilNotA}<br>";
echo "Hasil Not B: {$hasilNotB}<br><br><br>"; 

$hasilPenugasanPenjumlahan = $a += $b;
$hasilPenugasanPengurangan = $a -= $b;
$hasilPenugasanPerkalian = $a *= $b;
$hasilPenugasanPembagian = $a /= $b;
$hasilPenugasanSisa = $a %= $b;

echo "Hasil penugasan penjumlahan: {$hasilPenugasanPenjumlahan}<br>";
echo "Hasil penugasan pengurangan: {$hasilPenugasanPengurangan}<br>";
echo "Hasil penugasan perkalian: {$hasilPenugasanPerkalian}<br>";
echo "Hasil penugasan pembagian: {$hasilPenugasanPembagian}<br>";
echo "Hasil penugasan sisa: {$hasilPenugasanSisa}<br><br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil identik: {$hasilIdentik}<br>";
echo "Hasil tidak identik: {$hasilTidakIdentik}<br><br><br>";

$totalKursi = 45;
$kursiDiduduki = 28;
$kursiKosong = $totalKursi - $kursiDiduduki;
$presentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "Presentase kursi kosong adalah: " . round($presentaseKursiKosong,2) . "%";
?>