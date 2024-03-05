<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
} 

echo "<br><br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni+= $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

echo "<br><br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br><br><br>";

$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilai);
$minNilai = $nilai[0];
$maxNilai = $nilai[9];
$jumlah = 0;
$total = 0;

for ($i = 2; $i < 8; $i++) {
    $jumlah += $nilai[$i];
    $total++;
}

$rataRata = $jumlah / $total;

echo "Total nilai yang digunakan: " . $jumlah . "<br>";
echo "Jumlah nilai yang digunakan: ". $total ."<br>";
echo "rata-rata nilai: ". $rataRata ."<br>";

echo "<br><br><br>";

$harga = 120000;

if ($harga > 100000) {
    $diskon = 0.2 * $harga;
    $hargaSetelahDiskon = $harga - $diskon;
    echo "Harga setelah diskon: Rp " . number_format($hargaSetelahDiskon);
}

echo "<br><br><br>";

$totalPoin = 600;

echo "Total skor pemain adalah: $totalPoin <br>";

$ketentuan = ($totalPoin > 500) ? "Ya" : "Tidak";

echo "Apakah pemain mendapatkan hadian tambahan? $ketentuan"
?>