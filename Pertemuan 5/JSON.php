<?php
    //echo json_encode($_SERVER); #soal 21

    //echo $_SERVER['PHP_SELF'];
    //echo "<br>";
    //echo $_SERVER['SERVER_NAME'];
    //echo "<br>";
    //echo $_SERVER['HTTP_HOST'];
    //echo "<br>";
    //echo $_SERVER['HTTP_REFERER'];
    //echo "<br>";
    //echo $_SERVER['HTTP_USER_AGENT'];
    //echo "<br>";
    //echo $_SERVER['SCRIPT_NAME'];
    //echo "<br>"; #soal 22

    $nama = @$_GET['nama'];
    $usia = @$_GET['usia'];

    echo "Hali {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>