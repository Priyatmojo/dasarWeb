<?php
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nanma, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo"Perkenalkan nama saya ". $nanma. "<br/>";
}

perkenalan("Priyatmojo");
?>