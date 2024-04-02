<?php
// Soal 2.1
$myArray = array(); // Array kosong
if (empty($myArray)) {
    echo"Array tidak terdefinisi atau kosong.";
} else {
    echo"Array terdefinisi dan tidak kosong";
}
echo "<br>";
// Soal 2.2
if (empty($nonExistentVar)) {
    echo "Variabel tidak teridefinisi atau kosong";
} else {
    echo "Variabel terdenfisi dan tidak kosong.";
}
?>