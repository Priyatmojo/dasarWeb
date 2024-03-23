<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Voluptaten reprehenderit nobis veritatis commodi fugiat molestias 
impedit unde ipsum voluptatum, corrupti minus sit excpturi nostrum
quisquam? Qous impedit eum bulla optio.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: ". strlen($loremIpsum) . "<br>";
echo "Panjang kata: ". str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>". strtolower($loremIpsum) . "</p>";
?>